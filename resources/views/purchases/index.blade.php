@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Purchase History</h1>

        @if ($purchases->isEmpty())
            <p>No purchases yet.</p>
        @else
            <ul>
                @foreach ($purchases as $purchase)
                    <li>
                        {{ $purchase->car->brand }} - {{ $purchase->car->model }}
                        <br>
                        Color: {{ $purchase->car->color }}
                        <br>
                        Harga: Rp.{{ number_format($purchase->car->price, 0, ',', '.') }}
                        <br>
                        Jumlah Kursi: {{ $purchase->car->number_of_seats }}
                        <br>
                        Transmisi: {{ $purchase->car->transmission }}
                        <br>
                        <span style="color: green;">(Purchased)</span>
                        <form action="{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link" style="color: red; padding: 0;">Hapus</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

    <script>
        @if(session('success'))
            alert('{{ session('success') }}');
        @endif
    </script>
@endsection
