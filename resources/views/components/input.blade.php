<div class="col-md-6 mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="${{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}">
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>