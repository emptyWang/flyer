@inject('countries', 'App\Http\Utilities\Country')

{{ csrf_field() }}

<div class="form-group"> 
	<label for="street">Street:</label>
	<input type="text" class="form-control" name="street" id="street"  placeholder="Input street" value="{{old('street')}}" required>
</div>

<div class="form-group">
	<label for="city">City:</label>
	<input type="text" class="form-control" name="city" id="city"  placeholder="Input city" value="{{old('city')}}" required>
</div>

<div class="form-group">
	<label for="zip">Zip/Postal Code:</label>
	<input type="text" class="form-control" name="zip" id="zip"  placeholder="Input zip" value="{{old('zip')}}" required>
</div>

<div class="form-group">
	<label for="country">Country:</label>
	<select id="country" name="country" class="form-control" required>
		@foreach ($countries::all() as $code => $country)
			<option value="{{ $code }}">{{ $country }}</option>
		@endforeach
	</select>
</div>

<div class="form-group">
	<label for="state">State:</label>
	<input type="text" class="form-control" name="state" id="state"  placeholder="Input state" value="{{old('state')}}" required>
</div> 

<div class="form-group">
	<label for="price">Sale Price:</label>
	<input type="text" class="form-control" name="price" id="price"  placeholder="Input price" value="{{old('price')}}" required>
</div>

<div class="form-group">
	<label for="description">Home Description:</label>
	<textarea type="text" class="form-control" name="description" id="description" rows="10" required>
		{{old('description')}}
	</textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">Create Flyer</button>
</div>