@extends('layouts.AdminPanal')
@section('content')
<div class="u-body">
<section class="es-form-area">
    <div class="card">
        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
            <h2 class="text-white mb-0">
                Manage Exam Terms
            </h2>
        </header>

        <div class="card-body table-responsive" id="institue">
            <form action="" class="es-form es-add-form">
                <a href="{{ route('addexamterms') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
               <p class="text-right">Showing 1-1 of 1 item</p>
                <!---- session table  ----->
                    <table class="table table-bordered mt-3 text-center branch_table">
                        <thead class="table-bordered">
                            <tr>
                                <th scope="col">Srl</th>
                                <th scope="col">Session</th>
                                <th scope="col">Term Name</th>
                                <th scope="col">Marks For Final (%)</th>
                                <th scope="col">Related to Final Term ?	</th>
                                <th scope="col">Final Term ?</th>
                                <th scope="col">Exam Routine With Instruction ?</th>
                                <th scope="col">Website Result Publish ?</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row"></th>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">2022</option>
                                        <option value="">2021</option>
                                        <option value="">2020</option>
                                        <option value="">2019</option>
                                    </select>
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <input type="text" name="" id="">
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All </option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All &nbsp;&nbsp;&nbsp;</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All </option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </td>
                                <td>
                                    <select name="" id="">
                                        <option value="">All</option>
                                        <option value="">Yes</option>
                                        <option value="">No</option>
                                    </select>
                                </td>


                                <td></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>2021</td>
                                <td>Half Yearly Exam</td>
                                <td></td>
                                <td>Yes</td>
                                <td>No</td>
                                <td>No</td>
                                <td>Yes</td>
                                <td>
                                    <a href="exam_terms_view.html"><i class="fa-solid fa-eye"></i></a>&nbsp &nbsp
                                    <a href="exam_terms_edit.html"><i class="fa-solid fa-pencil"></i></a>&nbsp &nbsp
                                    <a href=""><i class="fa-solid fa-trash"></i></a>&nbsp &nbsp
                                </td>
                            </tr>

                        </tbody>
                    </table>
               
                <!---- /session table ----->
        
            </form> 
        </div>

    </div>    
</section>
</div>
@endsection