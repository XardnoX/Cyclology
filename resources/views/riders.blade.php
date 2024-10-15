@extends('layouts.app2')

@section('content')

<table id="riderTable" class="table table-striped" style="width:65%">
    <thead>
        <tr>
            <th>Jméno</th>
           
        </tr>
    </thead>
    <tbody>
      
        @foreach($data as $riders)
        <tr>
 <td><a href="/riders/{{ $riders->id }}">>{{ $riders->first_name }} {{ $riders->last_name }}</a></td>
</tr>
 @endforeach


    </tbody>
</table>

    <script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
new DataTable('#riderTable')

</script>

@endsection