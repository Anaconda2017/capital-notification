@extends('backend.layouts.app')

@php $pageTitle = 'Add User'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@section('content')
    @component('backend.layouts.header', ['navTitle' => 'Add User'])

    @endcomponent

    <!-- DOM - jQuery events table -->
    <section class="input-validation">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header bg-primary bg-darken-2 white text-center card-title-bold text-capitalize">{{ $pageTitle }}</div>
                <div class="card-content collapse show">
                    <div class="card-body">
                    <form class="form-horizontal" novalidate="">
                        <div class="row mt-2">

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Food Name in English</label>
                                        <input type="text" name="en_food_name" id="en_food_name" class="form-control" value="">
                                    </div>
                                                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">اسم الطعام بالعربي</label>
                                        <input type="text" name="ar_food_name" id="ar_food_name" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label class="bmd-label-floating">Image</label>
                                        <input type="file" name="image">
                                    </div>
                                                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-floating">Price ( If it is not pieces )</label>
                                        <input type="number" min="1" name="price" class="form-control" value="">
                                    </div>
                                                                    </div>

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">Ingredients In English</label>
                                        <textarea rows="20" cols="5" name="en_ingredients" class="form-control"></textarea>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group">
                                        <label class="bmd-label-static">المكونات بالعربي</label>
                                        <textarea rows="20" cols="5" name="ar_ingredients" class="form-control"></textarea>
                                    </div>

                                </div>




                                <div class="col-md-6">
                                    <div class="form-group bmd-form-group is-filled">
                                        <label class="bmd-label-floating">Category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="">Select a Category</option>
                                                                                            <option value="1">SOUPS</option>
                                                                                            <option value="2">SALAD</option>
                                                                                            <option value="3">Starters</option>
                                                                                            <option value="4">Oishi</option>
                                                                                            <option value="7">Hot Fried Roll</option>
                                                                                            <option value="8">Special Rolls</option>
                                                                                            <option value="9">Nigiri Sushi</option>
                                                                                            <option value="10">Fried Nigiri Sushi</option>
                                                                                            <option value="11">Hoso Maki Rolls</option>
                                                                                            <option value="12">Mono Maki</option>
                                                                                            <option value="13">Dynamite Roll</option>
                                                                                            <option value="14">Sashimi</option>
                                                                                            <option value="15">Chirashi</option>
                                                                                            <option value="16">Gunkan</option>
                                                                                            <option value="17">Temaki Hand Roll</option>
                                                                                            <option value="18">Rice</option>
                                                                                            <option value="19">Noodles</option>
                                                                                            <option value="20">Main Course</option>
                                                                                            <option value="21">Teppanyaki</option>
                                                                                            <option value="22">Kids Corner</option>
                                                                                            <option value="23">Combinations Platters</option>
                                                                                            <option value="24">Meal</option>
                                                                                    </select>
                                    </div>
                                                                    </div>

                            </div>
                            <div class="row no-gutters justify-content-end">
                                <button class="btn btn-primary">Add product</button>
                            </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DOM - jQuery events table -->
@endsection
