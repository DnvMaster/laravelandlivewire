<div>
    <br>
    <a style="padding-left:25px; text-decoration: none;" href="{{ route('create.subscriber') }}">Создать нового подписчика</a>
    <br><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Имя</th>
                <th scope="col">Редактирование</th>
                <th scope="col">Удаление</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
            <tr>
                <th scope="row">{{ $subscriber->id }}</th>
                <td>{{ $subscriber->name }}</td>
                <td><a href="{{ route('edit.subscriber', $subscriber->id) }}">Изменить</a></td>
                <td>
                     <button wire:confirm="Вы действительно хотите удалить эту запись?" wire:click="Delete_Subscriber('{{ $subscriber->id }}')">Удалить</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
