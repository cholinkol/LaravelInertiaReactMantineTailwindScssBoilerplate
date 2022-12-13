@extends('adminlte::page')

@section('title', 'Blog Post - ' . $id)

@section('content_header')
    <h1>Blog Post {{$id}}</h1>
@stop

@section('content')

    {{-- Title --}}
    <x-adminlte-input name="title" label="{{__('adminlte::blog.title')}}"
                      placeholder="{{__('adminlte::blog.enter-title')}}"
                      fgroup-class="col-md-12"/>

    {{-- Content --}}

    @php
        $config = [
            'height' => 300,
        ];
    @endphp

    <x-adminlte-text-editor name="content" label="{{__('adminlte::blog.content')}}"
                            placeholder="{{__('adminlte::blog.enter-content')}}"
                            fgroup-class="col-md-12" :config="$config"/>
@stop

@section('right-sidebar')
    <x-adminlte-card title="" theme="lightblue" icon="fas fa-lg fa-clock">

        {{-- Save button --}}
        <div class="flex justify-end">
            <x-adminlte-button label="{{__('adminlte::blog.save')}}" theme="success" icon="fas fa-lg fa-save"
                               class="mb-3"/>
        </div>

        {{-- Author --}}
        <x-adminlte-select label="{{__('adminlte::blog.status')}}" name="status" fgroup-class="col-md-12">
            <x-adminlte-options label="{{__('adminlte::blog.status')}}"
                                placeholder="{{__('adminlte::blog.enter-status')}}"
                                :options="[__('adminlte::blog.public'),__('adminlte::blog.draft'), __('adminlte::blog.private'), __('adminlte::blog.protected')]"/>
            />
        </x-adminlte-select>

        {{-- Publish --}}
        <x-adminlte-input name="publish" label="{{__('adminlte::blog.publish')}}"
                          value="{{now()}}" type="datetime-local"
                          fgroup-class="col-md-12"/>

        {{-- Slug --}}
        <x-adminlte-input name="slug" label="Slug" placeholder="{{__('adminlte::blog.enter-slug')}}"
                          fgroup-class="col-md-12"/>

        {{-- Author --}}
        <x-adminlte-select label="{{__('adminlte::blog.author')}}" name="author" fgroup-class="col-md-12">
            <x-adminlte-options label="{{__('adminlte::blog.author')}}"
                                placeholder="{{__('adminlte::blog.enter-author')}}"
                                :options="['Kevin', 'Peter', 'John']"/>
            />
        </x-adminlte-select>

        {{-- Remove button --}}
        <div class="flex justify-end">
            <x-adminlte-button label="{{__('adminlte::blog.remove')}}" theme="danger" icon="fas fa-lg fa-trash"
                               class="mb-3"/>
        </div>


    </x-adminlte-card>
@stop


