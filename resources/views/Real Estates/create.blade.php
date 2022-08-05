@extends('base')
@section('content')
<div class="container">
    <div class="card" style="width:635px;padding:3rem;background-color:#DCDCDC">

        <div class="card-header" style="text-align:left;height:75px">
            إضافة عقار جديد
        </div>

        <div class="card-body">
            <form id="main_data" method="post" action="/store-real-estate" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address_address">العنوان</label>
                            <input type="text" id="address-input" name="address_address" class="form-control map-input">
                        </div>
                        <div id="address-map-container" style="width:100%;height:400px; ">
                            <div style="width: 100%; height: 100%" id="address-map"></div>
                        </div>
                        <div class="col-md-6" style="margin-top: 2%">
                            <label for="">خط العرض</label>
                            <input class="form-control" name="address_latitude" id="address-latitude" value="0" />
                        </div>
                        <div class="col-md-6" style="margin-top: 2%">
                            <label for="">خط الطول</label>
                            <input class="form-control" name="address_longitude" id="address-longitude" value="0" />
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-6">
                            <label for="">تصنيف العقار</label>
                            <select class="form-control" name="category_id" id="category_id">
                                <option value=""></option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">نوع العقار</label>
                            <select class="form-control" name="real_estate_type" id="real_estate_type">
                                <option value=""></option>
                                <option value="سكني">سكني</option>
                                <option value="سياحي">سياحي</option>
                                <option value="تجاري">تجاري</option>
                                <option value="أرض">أرض</option>
                            </select>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-6">
                            <label for="">خيارات العقار</label>
                            <ul class="list-group">
                                @foreach ($periods as $period)
                                    <li class="list-group-item rent_type"><input type="checkbox" name="period[]" id="{{ $period->id }}">&nbsp;{{ $period->name }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <label for="">قيمة الأجار</label>
                            <input id="rent_value_id" class="form-control" type="number" value="0.0" name="" disabled>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-4">
                            <label for="">السعر</label>
                            <input type="number" class="form-control" name="rent_amount" id="rent_amount">
                        </div>
                        <div class="col-md-4">
                            <label for="">المساحة</label>
                            <input type="number" class="form-control" name="area" id="area">
                        </div>
                        <div class="col-md-4">
                            <label for="">المساحة الإجمالية</label>
                            <input type="number" class="form-control" name="total_area" id="total_area">
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-4">
                            <label for="">عدد غرف النوم</label>
                            <input type="number" class="form-control" name="sleep_room_count" id="sleep_room_count">
                        </div>
                        <div class="col-md-4">
                            <label for="">عدد الحمامات</label>
                            <input type="number" class="form-control" name="bath_room_count" id="bath_room_count">
                        </div>
                        <div class="col-md-4">
                            <label for="">الارتفاع الطابقي</label>
                            <input type="number" class="form-control" name="floor_height" id="floor_height">
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%;">
                        <label for="" style="margin-right: 3%">الاتجاه</label>
                        <div class="input-group">
                            <div class="col-md-4">
                                <input type="checkbox" name="" id="">&nbsp;غربي
                            </div>
                            <span class="input-group-btn" style="width:50px;"></span>
                            <div class="col-md-4">
                                <input type="checkbox" name="" id="">&nbsp;شرقي
                            </div>
                            <span class="input-group-btn" style="width:50px;"></span>
                            <div class="col-md-3"><input type="checkbox" name="" id="">&nbsp;شمالي
                            </div>
                            <span class="input-group-btn" style="width:50px;"></span>
                            <div class="col-md-3"><input type="checkbox" name="" id="">&nbsp;جنوبي
                            </div>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-4">
                            <label for="">حالة العقار</label>
                            <select class="form-control" name="state_id" id="state_id">
                                <option value=""></option>
                                @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->state }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ملكية العقار</label>
                            <select class="form-control" name="user_id" id="user_id">
                                <option value=""></option>
                                @foreach ($users as $user)
                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">ترخيص العقار</label>
                            <select class="form-control" name="" id="">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-4">
                            <label for="">نسبة المقاولة</label>
                            <select class="form-control" name="moqaula_perc" id="moqaula_perc">
                                <option value=""></option>
                                <option value="">1%</option>
                                <option value="">2%</option>
                                <option value="">3%</option>
                                <option value="">4%</option>
                            </select>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل يوجد مدخنة
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="chimney" value="option1">&nbsp;نعم
                            <input type="radio" name="chimney" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل يوجد مسبح
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="swimming_pool" value="option1">&nbsp;نعم
                            <input type="radio" name="swimming_pool" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل يوجد مصعد
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="elevator" value="option1">&nbsp;نعم
                            <input type="radio" name="elevator" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل البناء مكسي بحجر خارجي
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="with_rocks" value="option1">&nbsp;نعم
                            <input type="radio" name="with_rocks" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل الدرج مكسي (مبلط)
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="staircase" value="option1">&nbsp;نعم
                            <input type="radio" name="staircase" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل العقار مجهز بطاقة بديلة
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="alternative_energy" value="option1">&nbsp;نعم
                            <input type="radio" name="alternative_energy" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل يوجد بئر ماء
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="Water_well" value="option1">&nbsp;نعم
                            <input type="radio" name="Water_well" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل يوجد هنكار
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="hangar" value="option1">&nbsp;نعم
                            <input type="radio" name="hangar" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل يوجد ممرات
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="lanes" value="option1">&nbsp;نعم
                            <input type="radio" name="lanes" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6" style="font-size: 16px;font-weight: 800">
                            هل هي ورشة عمل
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="workshop" value="option1">&nbsp;نعم
                            <input type="radio" name="workshop" value="option2" style="margin-right: 2%">&nbsp;لا
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 4%">
                        <div class="col-md-4">
                            <label for="">رقم نسق الشاليه</label>
                            <input type="text" class="form-control" name="chalet_layout_number" id="chalet_layout_number">
                        </div>
                        <!-- <div class="col-md-4">
                                    <label for="">المساحة الكلية </label>
                                    <input type="text" class="form-control">
                                </div> -->

                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 3%; margin-right: 3%;font-size: medium;">
                        <label for="">إدخال غرفة</label>
                    </div>
                    <div class="col-md-12" style="margin-top: 1%">
                        <div class="col-md-4">
                            <label for="">النوع</label>
                            <select id="others_id" class="form-control" name="real_estate_type">
                                <option value=""></option>
                                <option value="حمام">حمام</option>
                                <option value="نوم">نوم</option>
                                <option value="صالون">صالون</option>
                                <option value="مطبخ">مطبخ</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">الطول</label>
                            <input id="others_length_id" class="form-control" type="number" name="real_estate_length" disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="">العرض</label>
                            <input id="others_width_id" class="form-control" type="number" name="real_estate_width" disabled>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-2">
                            <input id="add_room_btn" class="btn btn-primary" type="button" value="إضافة غرفة">
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%; margin-right: 2%">
                        <div class="alert alert-danger" id="room_add_alert" hidden></div>
                        <label for="">عرض الغرف</label>
                        <table class="table" id="room_table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Length</th>
                                    <th scope="col">Width</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <label for="">وصف العقار</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5"></textarea>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <div class="col-md-6">
                            <label for=""> إضافة صور</label>
                            <input type="file" value="" name="real_estate_images[]" class="form-control" multiple>
                        </div>
                    </div>
                    <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <div class="col-md-12" style="margin-top: 2%">
                        <label for=""> إضافة روابط فديو</label>
                        <textarea class="form-control" name="vedio_links" id="vedio_links" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <input id="create_btn" type="button" class="btn btn-primary" value="ادخال">
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    $('#create_btn').click(function(e) {
        e.preventDefault();
        var data = $('#main_data').serialize();

        var rooms=[];
        $('#room_table tr:gt(0)').each(function(item){
           var self = $(this);
           var type1 = self.find('td:eq(0)').text();
           var length1 = self.find('td:eq(1)').text();
           var width1 = self.find('td:eq(2)').text();
           var row = {'type':type1, 'length':length1,'width':width1};
           rooms.push(row);
        });

        var data1={'data':data, 'rooms':rooms};

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'post',
            url: '/store-real-estate',
            data:data1
        });
    });
</script>

<script>
    $('#add_room_btn').click(function() {
        var rows_count = $('#room_table tr').length;
        var type = $('#others_id').val();
        var length = $('#others_length_id').val();
        var width = $('#others_width_id').val();

        if (type != '' && length != '' && width != '') {
            var row = '<tr><th scope="row">' + (rows_count) + '</th><td>' + type + '</td><td>' + length +
                '</td><td>' + width + '</td></tr>';
            $('#room_table').append(row);

            $('#others_id').val('');
            $('#others_length_id').val('');
            $('#others_width_id').val('');
        } else {
            $('#room_add_alert').attr('hidden', false);
            $('#room_add_alert').text('You should add room details');
            setTimeout(() => {
                $('#room_add_alert').attr('hidden', true);
            }, 5000);
        }
    });
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps_api_key') }}&libraries=places&callback=initialize" defer async></script>
<script src="{{ asset('assets/js/mapInput.js') }}"></script>

<script>
    $('.rent_type input[type="checkbox"]').change(function() {
        var enable_rent_value = 0;
        const checked_id = $(this).attr('id');
        $('.rent_type input[type="checkbox"]').each(function(id, item) {
            if ($(item).is(':checked')) {
                enable_rent_value = 1;
            }
            if ($(item).attr('id') == checked_id && $(item).is(':checked')) {
                $(item).prop('checked', true);
            } else {
                $(item).prop('checked', false);
            }
        });
        if (enable_rent_value == 1) {
            $('#rent_value_id').attr('disabled', false);
        } else {
            $('#rent_value_id').attr('disabled', true);
        }
    });
</script>

<script>
    $('#others_id').change(function() {
        $('#others_length_id').val('');
        $('#others_width_id').val('');
        if ($(this).prop('selectedIndex') != 0) {
            $('#others_length_id').attr('disabled', false);
            $('#others_width_id').attr('disabled', false);
        } else {
            $('#others_length_id').attr('disabled', true);
            $('#others_width_id').attr('disabled', true);
        }
    });
</script>
@endpush