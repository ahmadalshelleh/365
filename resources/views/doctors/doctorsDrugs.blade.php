@extends('layouts.doctorsApp')

@section('title', 'Patients Dashboard')

@section('content')


    <div class="background-container">
        <div class="container">
            <div class="direction-text">

                <div class="row doctor-appointment white-container">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-3 drugs-columns">
                                الاسم التجاري
                            </div>
                            <div class="col-md-3 drugs-columns">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 drugs-columns">
                                الاسم العلمي
                            </div>
                            <div class="col-md-3 drugs-columns">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 drugs-columns">
                                اسم المتجر
                            </div>
                            <div class="col-md-3 drugs-columns">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 drugs-columns">
                                الشركة
                            </div>
                            <div class="col-md-3 drugs-columns">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 drugs-columns">
                                بلد المنشاء
                            </div>
                            <div class="col-md-3 drugs-columns">
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-3 drugs-columns">
                                نظام التصنيف الكيميائي(ATC)
                            </div>
                            <div class="col-md-3 drugs-columns">
                                <input type="text" class="form-control">
                            </div>
                        </div><br />
                        <div class="doctors-search-div">
                            <div class="doctors-search-button btn btn-primary">
                                بحث
                            </div>
                        </div>
                    </div>
                </div>

                <br />
                <div class="row doctor-appointment white-container">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <center><h4>المعلومات العلمية</h4></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table-bordered table">
                                    <thead>
                                    <tr>
                                        <td>الاسم العلمي</td>
                                        <th>الاسم البديل</th>
                                        <td>أشكال الجرعات</td>
                                        <td>التركيز</td>
                                        <td>المتجر</td>
                                        <td>شركة المبيعات</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>test</td>
                                        <td>test1</td>
                                        <td>test3</td>
                                        <td>test4</td>
                                        <td>test5</td>
                                        <td>test7</td>
                                        <td class="text-center">
                                            <a class="btn-drug-search" data-toggle="modal" data-target="#drugSearch">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Colloidal Bismuth Subcitrate calculated as Bi2O3 ,</td>
                                        <td>De-Nol</td>
                                        <td>Tablet</td>
                                        <td>calculated as Bi2O3 , 120 mg</td>
                                        <td>Ibn Rushd Drug Store</td>
                                        <td>Astellas Pharma Europe B.V</td>
                                        <td class="text-center">
                                            <a class="btn-drug-search" data-toggle="modal" data-target="#myModal612ing">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <nav class="nav-drugs">
                                <ul class="pagination pg1 simple-pagination">
                                    <li class="disabled"><span class="current prev page-link">
                                            <span aria-hidden="true">«</span></span>
                                    </li>
                                    <li class="page-link"><span class="current">1</span></li>
                                    <li><a href="#page-2" class="page-link">2</a></li>
                                    <li><a href="#page-3" class="page-link">3</a></li>
                                    <li><a href="#page-2" class="page-link next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <br />
                <div class="row doctor-appointment white-container">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <center><h4>المعلومات التجارية</h4></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table-bordered table">
                                    <thead>
                                    <tr>
                                        <td>الاسم التجاري</td>
                                        <td>الكود</td>
                                        <td>الباركود</td>
                                        <td>الوحدة</td>
                                        <td>المجموعة</td>
                                        <td></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Amaryl 2mg Tabs 30'</td>
                                        <td>2232</td>
                                        <td>6251653400103</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td class="text-center">
                                            <a class="btn-drug-search" data-toggle="modal" data-target="#myModal33567">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Amaryl 1mg Tabs 30'</td>
                                        <td>2231</td>
                                        <td>6251653400004</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td class="text-center">
                                            <a class="btn-drug-search" data-toggle="modal" data-target="#myModal33566">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <nav class="nav-drugs">
                                <ul class="pagination pg1 simple-pagination">
                                    <li class="disabled"><span class="current prev page-link">
                                            <span aria-hidden="true">«</span></span>
                                    </li>
                                    <li class="page-link"><span class="current">1</span></li>
                                    <li><a href="#page-2" class="page-link">2</a></li>
                                    <li><a href="#page-3" class="page-link">3</a></li>
                                    <li><a href="#page-2" class="page-link next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="drugSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">test</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links active" id="popup_info">معلومات</span>
                                    </div>
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links" id="popup_seller">المزود</span>
                                    </div>
                                    <div class="col-sm-3 popup-column">
                                        <span class="popup-links" id="popup_Doses">اشكال الجرعات</span>
                                    </div>
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links" id="popup_concentration">التركيز</span>
                                    </div>
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links" id="popup_shop">المتجر</span>
                                    </div>
                                </div>
                                <br />
                                <br />
                                <div class="row">
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links" id="popup_atccode">ATCCODE</span>
                                    </div>
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links" id="popup_company">الشركة</span>
                                    </div>
                                    <div class="col-sm-2 popup-column">
                                        <span class="popup-links" id="popup_country">البلد</span>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <br />

                            <div id="info_section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>الاسم العلمي</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>الاسم البديل</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="seller_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>المزود</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="doses_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>أشكال الجرعات</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="concentration_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>التركيز</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="shop_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>المتجر</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="ATCCODE_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>ATCCODE</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="company_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>الشركة</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="country_section" class="popup_section_none">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center popup-header">
                                            <h4>البلد</h4>
                                        </div>
                                    </div><br />
                                    <div class="row">
                                        <div class="col-12 text-right">
                                            <span>test</span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br />
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection