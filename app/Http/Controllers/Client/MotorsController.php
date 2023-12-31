<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Motor;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class MotorsController extends Controller
{
    //
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('model', 'LIKE', "%{$value}%")
                        ->orWhere('color', 'LIKE', "%{$value}%");
                });
            });
        });


        $motor = QueryBuilder::for(Motor::class)
            ->defaultSort('model')
            ->allowedSorts(['price', 'created_at'])
            ->allowedFilters(['color', 'model', 'weight', $globalSearch])
            ->paginate(5);

        return view('client.home', [
            'motor' => SpladeTable::for($motor)
                ->defaultSort('model')
                // ->withGlobalSearch()
                ->column(key: 'model', label: 'مدل', searchable: true, canBeHidden: false)
                ->column('color', searchable: true)
                ->column('price', sortable: true)
                ->column('weight', searchable: true)
                ->column('image', exportAs: false)
                ->column(key:'created_at',label:'Add Time', sortable: true)
                ->column('action')
         
        ]);
    }


    public function show($id = null)
    {
        return view('show', compact('id')); // "hello $id";
    }


    /**
     * store
     *
     * @param  mixed $request
     * @param  mixed $motor
     * @return void
     */
    public function store(Request $request, Motor $motor)
    {

        $request->validate(
            [
                'model' => 'required',
                'image' => 'required|mimes:png,jpg,jpeg|max:2048',
                'price' => 'required|numeric|between:0,99999999.99',
                'color' => 'required',
                'weight' => 'required|numeric|between:0,9999.99'
            ],
            [
                'image.required' => ' عکس الزامیست',
                'image.max' => 'حداکثر سایز قابل قبول 2 مگ م یباشد',
                'image.mimes' => 'فرمت های قابل قبول png,jpg',
                'model.required' => 'مدل الزامیست',
                'price.required' => 'قیمت الزامیست',
                'weight.required' => 'وزن الزامیست',
                'price.numeric' => 'عدد وارد نمایید',
                'price.between' => 'عدد مناسب وارد نمایید',
                'weight.between' => 'عدد مناسب وارد نمایید',
                'weight.numeric' => 'عدد وارد نمایید',
                'color.required' => 'رنگ الزامیست',
            ]
        );

        $data = $request->all();
        unset($data['_token'], $data['image']);
        $img = $request->file('image'); 

        $path = $img->hashName();
        Storage::put('public/media/', $img);

        $data['image'] = 'storage/media/' . $path;


        // dd($path);
        $insert = $motor->updateOrCreate($data);

        if ($insert) {
            Toast::title('درخواست شما ثبت و ذخیره شد')->success()->centerTop()->autoDismiss(3);
            return back();
        } else {
            Toast::title('خطا در ذخیره درخواست ارسالی')->danger()->centerTop()->autoDismiss(3);
            return back();
        }
    }
}
