@foreach ($items as $item)
    <tr>
        <td>{{ $item->title }}</td>
        <td><a href="{{ $item->url }}">{{ $item->link }}</a></td>
        <td class="text-center"><a{{ $item->target }} href="{!! route('pagination.edit', [$item->id]) !!}" title="{{ __('app.settings.edit') }} {{ $item->title }}"><i class="fas fa-edit"></i></a></td>
        <td class="text-center">
            {!! Form::open(['method' => 'DELETE','route' => ['pagination.destroy', $item->id],'style'=>'display:inline']) !!}
            <button class="link" type="submit"><i class="fa fa-trash-alt"></i></button>
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach
