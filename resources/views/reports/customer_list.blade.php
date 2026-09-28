@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h3 class="page-title"> ग्राहक सूची</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a href="{{ url('/') }}">होम</a> </li>
                    <li class="breadcrumb-item"> <a href="#">ग्राहक प्रबंधन</a> </li>
                    <li class="breadcrumb-item active">ग्राहक सूची</li>
                </ol>
            </nav>
        </div>

    </div>

    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="customerTable" class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>क्रमांक</th>
                                    <th>ग्राहक का नाम</th>
                                    <th>WhatsApp नंबर</th>
                                    <th>पता</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>रमेश कुमार</td>
                                    <td>9876543210</td>
                                    <td>शांति नगर, रायपुर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>सुरेश मार्कम</td>
                                    <td>9123456780</td>
                                    <td>ग्राम दरभा, जगदलपुर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>मीना कश्यप</td>
                                    <td>9988776655</td>
                                    <td>टोकापाल, बस्तर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>4</td>
                                    <td>मोहन सिंह</td>
                                    <td>9090909090</td>
                                    <td>लोहंडीगुड़ा, बस्तर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>5</td>
                                    <td>कविता नाग</td>
                                    <td>8765432109</td>
                                    <td>धरमपुरा, जगदलपुर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>6</td>
                                    <td>दीपक वर्मा</td>
                                    <td>7894561230</td>
                                    <td>नेहरू नगर, रायपुर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>7</td>
                                    <td>पूजा साहू</td>
                                    <td>9345678120</td>
                                    <td>गुढ़ियारी, रायपुर, छत्तीसगढ़</td>
                                </tr>

                                <tr>
                                    <td>8</td>
                                    <td>राजेश पटेल</td>
                                    <td>9012345678</td>
                                    <td>कांकेर रोड, कांकेर, छत्तीसगढ़</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#customerTable').DataTable({
                pageLength: 10,
                ordering: true,
                searching: true,
                lengthChange: true
            });

            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        });
    </script>
@endpush
