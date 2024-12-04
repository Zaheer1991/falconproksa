@php
    $clients = [
        ['src' => 'images/clients-logo/clients-1.png', 'alt' => 'Client 1'],
        ['src' => 'images/clients-logo/clients-2.png', 'alt' => 'Client 2'],
        ['src' => 'images/clients-logo/clients-3.png', 'alt' => 'Client 3'],
        ['src' => 'images/clients-logo/clients-4.png', 'alt' => 'Client 4'],
        ['src' => 'images/clients-logo/clients-5.png', 'alt' => 'Client 5'],
        ['src' => 'images/clients-logo/clients-6.png', 'alt' => 'Client 6'],
        ['src' => 'images/clients-logo/clients-7.png', 'alt' => 'Client 7'],
        ['src' => 'images/clients-logo/clients-8.png', 'alt' => 'Client 8'],
        ['src' => 'images/clients-logo/clients-9.png', 'alt' => 'Client 9'],
        ['src' => 'images/clients-logo/clients-10.png', 'alt' => 'Client 10'],
        ['src' => 'images/clients-logo/clients-11.png', 'alt' => 'Client 11'],
        ['src' => 'images/clients-logo/clients-12.png', 'alt' => 'Client 12'],
        ['src' => 'images/clients-logo/clients-13.png', 'alt' => 'Client 13'],
        ['src' => 'images/clients-logo/clients-14.png', 'alt' => 'Client 14'],
        ['src' => 'images/clients-logo/clients-15.png', 'alt' => 'Client 15'],
        ['src' => 'images/clients-logo/clients-16.png', 'alt' => 'Client 16'],
        ['src' => 'images/clients-logo/clients-17.png', 'alt' => 'Client 17'],
        ['src' => 'images/clients-logo/clients-18.png', 'alt' => 'Client 18'],
        ['src' => 'images/clients-logo/clients-19.png', 'alt' => 'Client 19'],
        ['src' => 'images/clients-logo/clients-20.png', 'alt' => 'Client 20'],
        ['src' => 'images/clients-logo/clients-21.png', 'alt' => 'Client 21'],
        ['src' => 'images/clients-logo/clients-22.png', 'alt' => 'Client 22'],
        ['src' => 'images/clients-logo/clients-23.png', 'alt' => 'Client 23'],
        ['src' => 'images/clients-logo/clients-24.png', 'alt' => 'Client 24'],
        ['src' => 'images/clients-logo/clients-25.png', 'alt' => 'Client 25'],
        ['src' => 'images/clients-logo/clients-26.png', 'alt' => 'Client 26'],
        ['src' => 'images/clients-logo/clients-27.png', 'alt' => 'Client 27'],
        ['src' => 'images/clients-logo/clients-28.png', 'alt' => 'Client 28'],
        ['src' => 'images/clients-logo/clients-29.png', 'alt' => 'Client 29'],
        ['src' => 'images/clients-logo/clients-30.png', 'alt' => 'Client 30'],
        ['src' => 'images/clients-logo/clients-31.png', 'alt' => 'Client 31'],
        ['src' => 'images/clients-logo/clients-32.png', 'alt' => 'Client 32'],
        ['src' => 'images/clients-logo/clients-33.png', 'alt' => 'Client 33'],
        ['src' => 'images/clients-logo/clients-34.png', 'alt' => 'Client 34'],
        ['src' => 'images/clients-logo/clients-35.png', 'alt' => 'Client 35'],
        ['src' => 'images/clients-logo/clients-36.png', 'alt' => 'Client 36'],
        ['src' => 'images/clients-logo/clients-37.png', 'alt' => 'Client 37'],
        ['src' => 'images/clients-logo/clients-38.png', 'alt' => 'Client 38'],
        ['src' => 'images/clients-logo/clients-39.png', 'alt' => 'Client 39'],
        ['src' => 'images/clients-logo/clients-40.png', 'alt' => 'Client 40'],
        ['src' => 'images/clients-logo/clients-41.png', 'alt' => 'Client 41'],
        ['src' => 'images/clients-logo/clients-42.png', 'alt' => 'Client 42'],
        ['src' => 'images/clients-logo/clients-43.png', 'alt' => 'Client 43'],
        ['src' => 'images/clients-logo/clients-44.png', 'alt' => 'Client 44'],
        ['src' => 'images/clients-logo/clients-45.png', 'alt' => 'Client 45'],
        ['src' => 'images/clients-logo/clients-46.png', 'alt' => 'Client 46'],
        ['src' => 'images/clients-logo/clients-47.png', 'alt' => 'Client 47']
    ];
@endphp

@foreach ($clients as $client)
    <div class="col-lg-3 col-md-6 col-12 mb-4">
        <div class="client-block shadow-lg text-center">
            <img src="{{ asset($client['src']) }}" class="img-fluid rounded uniform-image" alt="{{ $client['alt'] }}">
        </div>
    </div>
@endforeach
