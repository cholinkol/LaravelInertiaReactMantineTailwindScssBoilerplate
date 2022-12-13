@extends('adminlte::page')

@section('title', __('adminlte::pages.pages'))

@section('content_header')
    <h1>{{__('adminlte::pages.pages')}}</h1>
@stop

@section('content')
    @php
        $heads = [
            'ID',
            __('adminlte::pages.title'),
            __('adminlte::pages.author'),
            __('adminlte::pages.date'),
            ['label' => __('adminlte::blog.actions'), 'no-export' => true, 'width' => 16],
        ];

        $btnEdit = '<a href="#" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </a>';

        $btnDelete = '<a href="#" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </a>';

        $config = [
            'data' => [
                [1, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [2, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [3, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [4, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [5, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [6, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [7, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [8, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [9, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [10, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [11, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [12, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [13, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [14, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
                [15, '<a href="#">Page Title</a>', '<a href="#">John Doe</a>', '2020-01-01', "$btnEdit $btnDelete"],
            ],
            'order' => [[0, 'asc']],
            'columns' => [null, null, null, null, ['orderable' => false]],
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
