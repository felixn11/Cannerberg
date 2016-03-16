@extends('layouts.master')
<style>
    thead {border-bottom: 1px solid #333; text-align: center; font-weight: bold;}

    .border {
        -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        filter: alpha(opacity=0.8);
    }

    .col-centered{
        display: inline-block;
    }
</style>
@section('table')
    <table class="table table-condensed">
        <thead>
        <tr>
            <td>Voornaam</td>
            <td>Achternaam</td>
            <td>Functie</td>
            <td>Rang</td>
            <td>Nationaliteit</td>
            <td>Afdeling</td>
        </tr>
        </thead>
        <tbody>
        @foreach($employee as $value)
            <tr>
                <td>{!! $value->firstname !!}</td>
                <td>{!! $value->lastname !!}</td>
                <td>{!! $value->jobrole["jobrole"] !!} </td>
                <td>{!! $value->rank["rank"] !!}</td>
                <td>{!! $value->nationality["nationality"] !!}</td>
                <td>{!! $value->department["department"] !!}</td>


                <!-- we will also add show, edit, and delete buttons -->
                <td>
                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('employee/' . $value->id . '/edit') }}">Toon/wijzig</a>
                    <a class="btn btn-small btn-danger" href="{{ URL::to('employee/' . $value->id) }}">Verwijder</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @section('pagination')
        <div class="row text-center">
            <div class="col-centered ">
                <?php echo $employee->render(); ?>
            </div>
        </div>
    @stop
@stop
