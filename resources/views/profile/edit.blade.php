@extends('layouts.app')

@section('content')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white bg-white/10 backdrop-blur-sm rounded-lg border-2 border-white/15  hover:border-emerald-500/30 hover:shadow-emerald-500/30 transition-all shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white bg-white/10 backdrop-blur-sm rounded-lg border-2 border-white/15  hover:border-emerald-500/30 hover:shadow-emerald-500/30 transition-all shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white bg-white/10 backdrop-blur-sm rounded-lg border-2 border-white/15  hover:border-emerald-500/30 hover:shadow-emerald-500/30 transition-all shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endsection