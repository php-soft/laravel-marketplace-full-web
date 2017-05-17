<div class="form-group">
    {!!Form::label('name', 'Category Name')!!}
    <div class="form-controls">
        {!!Form::text('name', null, ['class'=>'form-control'])!!}
    </div>
</div>
    
<div class="form-group">
    {!!Form::label('type_id', 'Type')!!}
    <div class="form-controls">
        {!!Form::select('type_id', $types, null, ['class'=>'form-control'])!!}
    </div>
</div>
    {!!Form::submit('Save Category', ['class'=>'btn btn-primary'])!!}
