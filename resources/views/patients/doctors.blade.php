@extends('layouts.patientsApp')

@section('title', 'Patients Dashboard')

@section('content')

    <div class="row line-header-section">
        <div class="col-12">
            <div class="row">
                <a href="/patients/dashboard">الرئيسية</a> /صفحة الأطباء
            </div>

            <div class="row header-patient">
                صفحة الأطباء
            </div>
        </div>
    </div>

    <div class="background-container">
        <div class="container">
            <div class="direction-text">
                <div class="row doctor-appointment white-container">
                    <div class="col-12">
                        <div class="row">
                            <h5>ابحث عن دكتور</h5>
                        </div>
                        <div class="row">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row doctor-appointment white-container">
                    <div class="col-md-4">
                        <div class="row">
                            <h5>الاختصاص</h5>
                        </div><br />
                        <div class="row">
                            <div class="filter-widget">
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="14">
                                        <span class="checkmark"></span> طبيب عام
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40027">
                                        <span class="checkmark"></span> جلدية
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40028">
                                        <span class="checkmark"></span> طبيب أسنان
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40029">
                                        <span class="checkmark"></span> طبيب نفسي
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40030">
                                        <span class="checkmark"></span> طبيب أطفال وحديثي ولادة
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40031">
                                        <span class="checkmark"></span> طبيب دماغ وأعصاب
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40032">
                                        <span class="checkmark"></span> طبيب عظام
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40033">
                                        <span class="checkmark"></span> طبيب نسائية وتوليد
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40034">
                                        <span class="checkmark"></span> أنف وأذن زحنجرة
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40035">
                                        <span class="checkmark"></span> قلب وأوعية موية
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40036">
                                        <span class="checkmark"></span> أمراض دم
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40037">
                                        <span class="checkmark"></span> أورام
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40038">
                                        <span class="checkmark"></span> جراحة أطفال
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40039">
                                        <span class="checkmark"></span> جراحة أوعية دموية
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40040">
                                        <span class="checkmark"></span> جراحة تجميل
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40041">
                                        <span class="checkmark"></span> جراحة دماغ وأعصاب
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40042">
                                        <span class="checkmark"></span> جراحة سمنة وتنظير
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40043">
                                        <span class="checkmark"></span> طبيب عيون
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40044">
                                        <span class="checkmark"></span> دكتور مسالك بولية
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40045">
                                        <span class="checkmark"></span> دكتور تخسيس وتغذية
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40046">
                                        <span class="checkmark"></span> أخصائي صدر وجهاز تنفسي
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="specialityid" value="40047">
                                        <span class="checkmark"></span> الكل
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <h5>شركات التأمين</h5>
                        </div><br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="filter-widget">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50009">
                                            <span class="checkmark"></span> نقابة المهندسين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50033">
                                            <span class="checkmark"></span> نقابة المحاميين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50032">
                                            <span class="checkmark"></span> نقابة الأسنان
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50008">
                                            <span class="checkmark"></span> نات هلث
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50029">
                                            <span class="checkmark"></span> ميد نيت
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50031">
                                            <span class="checkmark"></span> ميد فيزا
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50030">
                                            <span class="checkmark"></span> ميد سيرفس
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50028">
                                            <span class="checkmark"></span> فيلادلفيا للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50027">
                                            <span class="checkmark"></span> غلوب ميد
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50026">
                                            <span class="checkmark"></span> شركة مصفاة البترول
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50025">
                                            <span class="checkmark"></span> شركات الفوسفات
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50024">
                                            <span class="checkmark"></span> رويال كير
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50022">
                                            <span class="checkmark"></span> جراسا للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50052">
                                            <span class="checkmark"></span> بنك الاردن
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50051">
                                            <span class="checkmark"></span> اليرموك للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50050">
                                            <span class="checkmark"></span> النسر العربي للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50048">
                                            <span class="checkmark"></span> المنارة للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50011">
                                            <span class="checkmark"></span> المجموعة العربية الأوروبية للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50047">
                                            <span class="checkmark"></span> المجموعة العربية الأردنية للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50046">
                                            <span class="checkmark"></span> المتوسط والخليج للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50045">
                                            <span class="checkmark"></span> المتوسط والخليج للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50044">
                                            <span class="checkmark"></span> المتحدة للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50049">
                                            <span class="checkmark"></span> المؤسسة العامة للضمان الأجتماعي
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50043">
                                            <span class="checkmark"></span> الكهرباء الوطنية
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50042">
                                            <span class="checkmark"></span> الكهرباء الأردنية
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="filter-widget">
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50041">
                                            <span class="checkmark"></span> القدس للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50040">
                                            <span class="checkmark"></span> العربية الألمانية للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50039">
                                            <span class="checkmark"></span> العرب للتأمين على الحياة
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50038">
                                            <span class="checkmark"></span> الضامنون العرب
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50037">
                                            <span class="checkmark"></span> الشركة الأردنية الأماراتية للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50004">
                                            <span class="checkmark"></span> الشرق العربي للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="40003">
                                            <span class="checkmark"></span> الشرق الأوسط للتامين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50036">
                                            <span class="checkmark"></span> التأمين الوطنية
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50035">
                                            <span class="checkmark"></span> التأمين العربية
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50034">
                                            <span class="checkmark"></span> التأمين الأسلامية
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50010">
                                            <span class="checkmark"></span> التأمين الأردنية
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50021">
                                            <span class="checkmark"></span> البوتاس
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50020">
                                            <span class="checkmark"></span> البنك المركزي الأردني
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50019">
                                            <span class="checkmark"></span> البنك العربي الأسلامي
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50018">
                                            <span class="checkmark"></span> البنك العربي
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50017">
                                            <span class="checkmark"></span> البنك التجاري الأردني
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50016">
                                            <span class="checkmark"></span> البركة للتكافل
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50005">
                                            <span class="checkmark"></span> الأولى للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50012">
                                            <span class="checkmark"></span> الأمريكية للتأمين على الحياة
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50015">
                                            <span class="checkmark"></span> الأمارتية سكوب
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50007">
                                            <span class="checkmark"></span> الأردنية الفرنسية للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50006">
                                            <span class="checkmark"></span> الأردن الدولية للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50014">
                                            <span class="checkmark"></span> الأراضي المقدسة للتأمين
                                        </label>
                                    </div>
                                    <div>
                                        <label class="custom_check">
                                            <input type="checkbox" name="insuranceid" value="50013">
                                            <span class="checkmark"></span> الأتحاد العربي الدولي للتأمين
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="doctors-search-div">
                        <div class="doctors-search-button btn btn-primary">
                            بحث
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection