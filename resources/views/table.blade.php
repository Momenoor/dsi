@extends('layouts.app')
@section('content')
    <div class="row">

        <div class="col-md-12">
            <div class="blog-post">
                <div class="page-subtitle">
                    <h1>Creditor List</h1>
                    <p></p>

                </div>

                <div class="the-text">
                    <div style="text-align: left;"><br></div>
                    <div>
                        <br>
                    </div>
                    <div>
                        <table>
                            <thead>
                            <tr>
                                <th>English Name</th>
                                <th>Arabic Name</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            @foreach($creditors as $creditor)
                                <tr>
                                    <td>
                                        {{$creditor->name_en}}
                                    </td>
                                    <td>
                                        {{$creditor->name_ar}}
                                    </td>
                                    <td>
                                        {{$creditor->amount}}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
@endsection
