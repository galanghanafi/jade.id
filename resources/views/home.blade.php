@extends('layouts.app')

@section('content')
    <!-- 1 -->
    <div class="flex flex-col items-center justify-center space-y-4 bg-jdark p-16 text-jwhite h-screen">
        <!-- 1.text -->
        <h1 class="font-amatic text-6xl font-bold ">Jade.ID</h1>
        <p class="text-center">Jade.id adalah digital agency yang menyediakan jasa pembuatan desain grafis untuk
            berbagai kebutuhan
            sekaligus Digital Consultant.</p>
        <!-- whatsapp button -->
        <div class="flex items-center">
            <div class="flex space-x-3 bg-jblue rounded-3xl items-center p-3">
                <i class="fa-brands fa-whatsapp h-6 text-jgreen"></i>
                <p>Klik Chat Via WhatsApp</p>
            </div>
        </div>
        <!-- 1.img -->
        <div class="pt-6">
            <img src="{{ asset('asset/img/hello.png') }}" alt="">
        </div>
    </div>
    <!-- 1 end -->

    {{-- 2 --}}
    <div class="bg-jblue text-jwhite font-roboto text-center px-16 pt-6">
        <div>
            <h2 class="text-2xl ">Pilih Jasa Desain</h2>
        </div>
        {{-- cards --}}
        <div class="space-y-6 py-6">
            {{-- card 1 --}}
            @foreach ($data as $d)
                <div class="max-w-xs rounded-md shadow-md mx-auto text-start space-y-6 p-6 jcard">
                    <div class="space-y-2">
                        <i class="{{ $d->logo }} text-jgreen text-2xl"></i>
                        <h2 class="text-xl">{{ $d->product }}</h2>
                    </div>
                    <p>{{ $d->desc }}</p>
                    <div class="font-poppins flex justify-center">
                        <div class="border-2 rounded-full px-6 py-2">
                            <p>INFO LEBIH LANJUT<i class="pl-4 fa-solid fa-forward"></i></p>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- {{-- card 2 --}}
                                            <div class="max-w-xs rounded-md shadow-md mx-auto text-start space-y-6 p-6 jcard">
                                                <div class="space-y-2">
                                                    <i class="fa fa-crown text-jgreen text-2xl"></i>
                                                    <h2 class="text-xl">Desain Logo dan Branding</h2>
                                                </div>
                                                <p>Untuk kamu yang sedang membutuhkan desain logo untuk kegiatan usaha atau kebutuhan acara.</p>
                                                <div class="font-poppins flex justify-center">
                                                    <div class="border-2 rounded-full px-6 py-2">
                                                        <p>INFO LEBIH LANJUT<i class="pl-4 fa-solid fa-forward"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- card 3 --}}
                                            <div class="max-w-xs rounded-md shadow-md mx-auto text-start space-y-6 p-6 jcard">
                                                <div class="space-y-2">
                                                    <i class="fa fa-crown text-jgreen text-2xl"></i>
                                                    <h2 class="text-xl">Desain Logo dan Branding</h2>
                                                </div>
                                                <p>Untuk kamu yang sedang membutuhkan desain logo untuk kegiatan usaha atau kebutuhan acara.</p>
                                                <div class="font-poppins flex justify-center">
                                                    <div class="border-2 rounded-full px-6 py-2">
                                                        <p>INFO LEBIH LANJUT<i class="pl-4 fa-solid fa-forward"></i></p>
                                                    </div>
                                                </div>
                                            </div> -->
        </div>
    </div>
    {{-- 2 end --}}
@endsection
