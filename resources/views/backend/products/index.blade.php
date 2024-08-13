@extends('main')

@section('content')
    <div class="card product my_card">
        <div class="card-header d-flex justify-content-between align-items-center bg-transparent">
            <h5 class="mb-0 text-dark">Products - <div class="badge badge-myColor" id="badgeTotalCount">{{ App\Models\Product::where('status', 1)->count() }}</div></h5>
            <div class="d-flex justify-content-end">
                <a href="#" class="danger_button clear_data mr-2">
                    <div class="d-flex align-items-center">
                        <i class="ri-delete-bin-2-fill primary_icon"></i>
                        <span class="button_content">Clear Data</span>
                    </div>
                </a>
                <a href="#" class="danger_button mr-2" id="deleteSelectedData">
                    <div class="d-flex align-items-center">
                        <i class="ri-delete-bin-2-fill primary_icon"></i>
                        <span class="button_content">Delete Selected Data</span>
                    </div>
                </a>
                <a class="primary_button mr-2" href="{{route('product.excel.import')}}">
                    <div class="d-flex align-items-center">
                        <i class="ri-add-circle-fill mr-2 primary-icon"></i>
                        <span class="button_content">Excel Import</span>
                    </div>
                </a>
                <a class="primary_button" href="{{route('product.create')}}">
                    <div class="d-flex align-items-center">
                        <i class=" ri-add-circle-fill mr-2 primary-icon"></i>
                        <span class="button_content">Product အသစ်ဖန်တီးမည်</span>
                    </div>
                </a>
            </div>
        </div>

        <div class="card-body px-0">
            <form action="product" method="get">
                <div class="table-responsive">
                    <table class="table table-hover" id="datatable" style="width:100%;">
                        <thead class="text-center text-muted" style="background: #F3F6F9">
                            <th class="text-center no-sort no-search"><input type="checkbox" class="form-check" id="select_all_ids"></th>
                            <th class="text-center no-sort no-search">Image</th>
                            <th class="text-center no-sort">အမည်</th>
                            <th class="text-center no-sort">စျေးနှုန်း</th>
                            <th class="text-center no-sort">ယွမ် စျေးနှုန်း</th>
                            <th class="text-center no-sort no-search">အမှတ်တံဆိပ် / Brand</th>
                            <th class="text-center no-sort no-search">အမျိူးအစား / Category</th>
                            <th class="text-center no-sort no-search">Models</th>
                            <th class="text-center no-sort no-search">Types</th>
                            <th class="text-center no-sort no-search">Ranges</th>
                            <th class="text-center no-sort no-search">လက်ကျန်</th>
                            <th class="text-center no-sort no-search">ပြင်မည်/ဖျက်မည်</th>
                        </thead>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
      $(document).ready(function() {
            let table = $('#datatable').DataTable( {
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: "/products/datatable/ssd",
                language : {
                    "searchPlaceholder": "By Name",
                  "processing": "<img src='{{asset('/images/loading.gif')}}' width='50px'/><p></p>",
                  "paginate" : {
                    "previous" : '<i class="mdi mdi-chevron-triple-left"></i>',
                    "next" : '<i class="mdi mdi-chevron-triple-right"></i>',
                  }
                },
                columns : [
                  {data: 'check', name: 'check', class: 'text-left'},
                  {data: 'image', name: 'image', class: 'text-center'},
                  {data: 'name', name: 'name', class: 'text-center'},
                  {data: 'price', name: 'price', class: 'text-center'},
                  {data: 'yuan_price', name: 'yuan_price', class: 'text-center'},
                  {data: 'brand', name: 'brand', class: 'text-center'},
                  {data: 'category', name: 'category', class: 'text-center'},
                  {data: 'modals', name: 'modals', class: 'text-center'},
                  {data: 'types', name: 'types', class: 'text-center'},
                  {data: 'ranges', name: 'ranges', class: 'text-center'},
                  {data: 'instock', name: 'instock', class: 'text-center'},
                  {data: 'action', name: 'action', class: 'text-center'},
                ],
                columnDefs : [
                  {
                    targets : 'hidden',
                    visible : false,
                    searchable : false,
                  },
                  {
                    targets : 'no-sort',
                    sortable : false,
                  },
                  {
                    targets : 'no-search',
                    searchable : false,
                  },
                  {
                    targets: [0],
                    class : "control"
                  },
                ],
            });

            const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 1800,
              width : '18em',
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            $(document).on('click', '.delete_btn', function(e) {
              e.preventDefault();
              swal({
                text: "Are you sure?",
                icon: "info",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  let id = $(this).data('id');
                  $.ajax({
                    url : `/products/${id}`,
                    method : 'DELETE',
                  }).done(function(res) {
                    let totalCount = $("#badgeTotalCount").text();
                        $('#badgeTotalCount').text(totalCount - 1);
                      table.ajax.reload();
                      Toast.fire({
                      icon: 'success',
                      title: "အောင်မြင်ပါသည်။"
                    })
                  })
                }
              });
            })

            $(document).on('click', '.clear_data', function(e) {
              e.preventDefault();
              swal({
                text: "This action will delete all data from products!",
                icon: "info",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                  $.ajax({
                    url : `/products-delete-all`,
                    method : 'GET',
                  }).done(function(res) {
                    let totalCount = $("#badgeTotalCount").text();
                        $('#badgeTotalCount').text(totalCount - 1);
                      table.ajax.reload();
                      Toast.fire({
                      icon: 'success',
                      title: "အောင်မြင်ပါသည်။"
                    })
                    location.reload();
                  })
                }
              });
            })

            $('#select_all_ids').on('click', function(e) {
                if ($(this).is(':checked', true)) {
                    $('.checkbox_ids').prop('checked', true);
                }else {
                    $('.checkbox_ids').prop('checked', false);
                }
            })

            $('#deleteSelectedData').on('click', function(e) {
                e.preventDefault();
                let all_ids = [];
                $('input:checkbox[name=ids]:checked').each(function(){
                    all_ids.push($(this).val());
                });
                // console.log(all_ids);
                swal({
                    text: "This action will delete all the selected data!",
                    icon: "info",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    $.ajax({
                        url : `/products-delete-selected`,
                        type : "DELETE",
                        data : {
                            ids : all_ids,
                            _token : '{{ csrf_token() }}'
                        }
                        // method : 'GET',
                    }).done(function(res) {
                        // console.log(res);
                        let totalCount = $("#badgeTotalCount").text();
                            $('#badgeTotalCount').text(totalCount - 1);
                        table.ajax.reload();
                        Toast.fire({
                        icon: 'success',
                        title: "အောင်မြင်ပါသည်။"
                        })
                        location.reload();
                    })
                    }
                });
            })
        })
    </script>
@endsection
