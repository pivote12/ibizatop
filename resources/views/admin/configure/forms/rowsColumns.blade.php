@foreach($data as $key => $item)
    <tr class="gradeX">
        <td>{!! $item->name !!}</td>
        <td>{!! $item->name_en !!}</td>
        <td>{!! $item->URL !!}</td>
        <td class="actions">
            <a href="#" class="hidden on-editing save-row"><i class="fa fa-save"></i></a>
            <a href="#" class="hidden on-editing cancel-row"><i class="fa fa-times"></i></a>
            <a href="/admin/{!! $rootBase !!}" data-id="{!! $item->id !!}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
            <a href="/admin/{!! $rootBase !!}" data-id="{!! $item->id !!}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
        </td>

    </tr>
@endforeach