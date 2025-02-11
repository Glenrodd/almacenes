@extends('layouts.print')

@section('content')
<br>
<table class="table-info align-top no-padding no-margins border">
    <tr>
        <td class="text-center bg-grey-darker text-xs text-white ">Solicitante</td>
        <td colspan="3" class="text-xs uppercase">{{$persona->employee->getFullName()}}</td>
    </tr>
    <tr>
        <td  class="text-center bg-grey-darker text-xs text-white">Dependencia</td>
        <td colspan="3" class="text-xs uppercase">{{$gerencia}}</td>
    </tr>

</table>
<br>
<table class="table-info w-100">
    <thead class="bg-grey-darker">
        <tr class="font-medium text-white text-sm">
            <td class="px-15 py text-center text-xxs ">
                Nro.
            </td>
            <td class="px-15 py text-center  text-xxs">
                Unidad
            </td>
            <td class="px-15 py text-center text-xxs">
                Descripcion
            </td>
            <td class="px-15 py text-center text-xxs">
                Cantidad
            </td>
        </tr>
    </thead>
    <tbody>
         <?php $count=1;
            $total_quantity=0;
        ?>
        @foreach ($request as $item)
            <tr class="text-sm">
                <td class="text-center text-xxs uppercase font-bold px-5 py-3">{{ $count }}</td>
                <td class="text-center text-xxs uppercase font-bold px-5 py-3">{{ $item->article->unit->name }}</td>
                <td class="text-center text-xxs uppercase font-bold px-5 py-3">{{ $item->article->name }}</td>
                <td class="text-center text-xxs uppercase font-bold px-5 py-3">{{ $item->quantity_apro }}</td>
            </tr>
            <?php
                $count++;
                $total_quantity += $item->quantity;
            ?>
        @endforeach
            <tr class="text-sm">
                <td class="text-center text-xxs uppercase font-bold px-4 py-3 bg-grey-darker text-white" colspan="3">Total</td>
                <td class="text-center text-xxs uppercase font-bold px-5 py-3" >{{ $total_quantity}}</td>
            </tr>    
    </tbody>
</table>
<br>
<br>
<br>
<br>
<table>
    <tr>
        <td class="text-center">______________</td>
        <td class="text-center">______________</td>
        <td class="text-center">______________</td>
    </tr>
    <tr>
        <td class="text-center text-xxs">Solicitante</td>
        <td class="text-center text-xxs">Responsable de Almacen</td>
        <td class="text-center text-xxs">Area/Unidad Administrativas</td>
    </tr>
</table>

@endsection
