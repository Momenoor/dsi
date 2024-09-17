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
                    <br>
                    <div>
                        <div class="fl-col-content fl-node-content vamtam-show-bg-image"><div class="fl-module fl-module-rich-text fl-node-3ez4pkalvosq" data-node="3ez4pkalvosq">
                                <div class="fl-module-content fl-node-content">
                                    <div class="fl-rich-text">
                                        <p><span style="font-size: 20px;"><a href="https://www.drakescull.com/wp-content/uploads/2024/09/1-Sukuk-Holders.pdf">Creditors List as published on September 2024 (Sukuk holders)</a></span></p>
                                        <p><span style="font-size: 20px;"><a href="https://www.drakescull.com/wp-content/uploads/2024/09/2-Commercial-List.pdf">Creditors List as published on September 2024 (</a><a href="https://www.drakescull.com/wp-content/uploads/2024/05/Cash-Settlement-Claim-Form.pdf">Cash Settlement</a><a href="https://www.drakescull.com/wp-content/uploads/2024/05/Creditors-List-as-published-on-January-30_2024.pdf">)</a></span></p>
                                        <p><span style="font-size: 20px;"><a href="https://www.drakescull.com/wp-content/uploads/2024/09/3-DSI-undertaking-and-Cash-Settelment.pdf">Cash Settlement Claim Form.</a></span></p>
                                        <p><span style="font-size: 20px;"><a href="https://www.drakescull.com/wp-content/uploads/2024/05/New-Sukuk-Claim-Form.pdf">Sukuk Claim Form </a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <form class="form-inline" action="{{ url()->current() }}" method="GET">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search..."
                                       value="{{ request()->query('search') }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                            <a href="{{ url()->current() }}" class="btn btn-secondary">Reset</a>
                        </form>
                        <br>
                        <div class="btn-group mb-3" role="group" aria-label="Toggle List Types">
                            <a href="{{ route('creditor-list', 'commercial') }}"
                               class="btn btn-primary {{ $type === 'commercial' ? 'active' : '' }}">Commercial
                                - الديون التجارية</a>
                            <a href="{{ route('creditor-list', 'sokuk') }}"
                               class="btn btn-primary {{ $type === 'sokuk' ? 'active' : '' }}">Sokuk
                                - ديون كبار الدائنين (صكوك)</a>
                            <a href="{{ route('creditor-list', 'labour') }}"
                               class="btn btn-primary {{ $type === 'labour' ? 'active' : '' }}">Labour
                                - الديون العمالية</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-sm">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">En-Name</th>
                                    <th class="text-center">Ar-Name</th>
                                    <th class="text-center">Accepted Debts</th>
                                    @if($type == 'sokuk')
                                        <th class="text-center">10% Amount</th>
                                        <th class="text-center">Number of Bonds</th>
                                    @else
                                        <th class="text-center">Amount Due for Payment</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($creditors as $i => $creditor)
                                    <tr>
                                        <td class="text-center  ">{{$i+1}}</td>
                                        <td>{{$creditor->name_en}}</td>
                                        <td class="text-right">{{$creditor->name_ar}}</td>
                                        <td class="text-right">{{number_format($creditor->amount,2)}}</td>
                                        @if($type == 'sokuk')
                                            <td class="text-right">{{number_format($creditor->amount * 0.10,2)}}</td>
                                            <td class="text-right">{{number_format(floor(($creditor->amount * 0.10)/5000))   }}</td>
                                        @else
                                            <td class="text-right">{{number_format($creditor->amount * 0.10,2)}}</td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
        </div>
    </div>
@endsection
