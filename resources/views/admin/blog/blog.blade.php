@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
    <div class="flex justify-between">

        <h1>Blog</h1>

        {{-- Button Create new blog post --}}
        <a href="{{ route('admin.blog.create') }}">
            <x-adminlte-button class="btn-sm" theme="success" icon="fas fa-lg fa-plus"
                               label="{{__('adminlte::blog.new-post')}}"/>
        </a>

    </div>

@stop

@section('content')
    @php
        $heads = [
            'ID',
            __('adminlte::blog.title'),
            __('adminlte::blog.author'),
            __('adminlte::blog.categories'),
            __('adminlte::blog.tags'),
            __('adminlte::blog.date'),
            ['label' => __('adminlte::blog.actions'), 'no-export' => true, 'width' => 16],
        ];

        /**
         * Function to render the action Edit button
         * @param int $id Blog post id
         * @return string
         */
        function btnEdit($id): string {
            return "<a href='/admin/blog/$id' class='btn btn-xs btn-default text-primary mx-1 shadow' title='Edit'>
                <i class='fa fa-lg fa-fw fa-pen'></i>
            </a>";
        }

        $btnDelete = '<a href="#" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </a>';

        $config = [
            'data' => [
                [1, '<a href="/admin/blog/1">Blog Title</a>', '<a href="#">John Doe</a>', '<a href="#">Category 1</a>, <a href="#">Category 2</a>', '<a href="#">Tag 1</a>, <a href="#">Tag 2</a>', '2020-01-01', btnEdit(1) . " $btnDelete"],
                [2, '<a href="/admin/blog/2">Blog Title</a>', '<a href="#">John Doe</a>', '<a href="#">Category 1</a>, <a href="#">Category 2</a>', '<a href="#">Tag 1</a>, <a href="#">Tag 2</a>', '2020-01-01', btnEdit(2) . " $btnDelete"],
                [3, '<a href="/admin/blog/3">Blog Title</a>', '<a href="#">John Doe</a>', '<a href="#">Category 1</a>, <a href="#">Category 2</a>', '<a href="#">Tag 1</a>, <a href="#">Tag 2</a>', '2020-01-01', btnEdit(3) . " $btnDelete"],
                [4, '<a href="/admin/blog/4">Blog Title</a>', '<a href="#">John Doe</a>', '<a href="#">Category 1</a>, <a href="#">Category 2</a>', '<a href="#">Tag 1</a>, <a href="#">Tag 2</a>', '2020-01-01', btnEdit(4) . " $btnDelete"],
                [5, '<a href="/admin/blog/5">Blog Title</a>', '<a href="#">John Doe</a>', '<a href="#">Category 1</a>, <a href="#">Category 2</a>', '<a href="#">Tag 1</a>, <a href="#">Tag 2</a>', '2020-01-01', btnEdit(5) . " $btnDelete"],
            ],
            'order' => [[0, 'asc']],
            'columns' => [null, null, null, null, null, null, ['orderable' => false]],
            'paging' => true,
            'pageLength' => 10,
            'language' => [
                'lengthMenu' => __('adminlte::adminlte.show_entries'),
                'zeroRecords' => __('adminlte::adminlte.zero_records'),
                'info' => __('adminlte::adminlte.showing_page') . ' _PAGE_ ' . __('adminlte::adminlte.of') . ' _PAGES_',
                'infoEmpty' => __('adminlte::adminlte.zero_records'),
                'infoFiltered' => '(' . __('adminlte::adminlte.filtered_from') . ' _MAX_ ' . __('adminlte::adminlte.total_entries') . ')',
                'search' => __('adminlte::adminlte.search'),
                'paginate' => [
                    'first' => __('adminlte::adminlte.first'),
                    'last' => __('adminlte::adminlte.last'),
                    'next' => __('adminlte::adminlte.next'),
                    'previous' => __('adminlte::adminlte.previous'),
                ],
            ],
        ];
    @endphp

    <x-adminlte-datatable id="table1" :heads="$heads" with-buttons :config="$config">
        @foreach($config['data'] as $row)
            <tr>
                @foreach($row as $cell)
                    <td>{!! $cell !!}</td>
                @endforeach
            </tr>
        @endforeach
    </x-adminlte-datatable>

@stop
