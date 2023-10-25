<div class="form-group">
    <label for="{{$id}}">{{(Str::headline($name))}}</label>
    <input type="text" class="{{$class}}" name="{{$name}}" id="{{$id}}" aria-describedby="{{$smallId}}" placeholder="{{Str::headline($placeholder)}}">
    <small id="{{$smallId}}" class="{{$smallClass}}">{{Str::headline($placeholder)}}</small>
</div>
