<!-- It is never too late to be what you might have been. - George Eliot -->
<div class="col-lg-3 mb-3">
    <div class="card">
        <div class="card-header">
            {{Str::headline($title)}}
        </div>
        <div class="card-body">
            <h4 class="card-title"><img src="{{asset($image)}}" height="150" width="320" class="img-fluid img-thumbnail ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Image"></h4>
            <p class="card-text">{{$description}}</p>
        </div>
        <div class="card-footer text-muted">
            {{Str::headline($category)}}
        </div>
    </div>
</div>