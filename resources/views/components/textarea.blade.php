@props(['value'])
<textarea {{ $attributes }}
          class="textarea textarea-bordered">{{ $value }}</textarea>
@error('description')
<span>{{ $message }}</span>
@enderror
