<div>
     <form wire:submit="Update_Subscriber">
        <label>Редактирование подписчика</label>
        <input type="text" wire:model="name" value="{{ $subscriber->name }}">
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</div>
