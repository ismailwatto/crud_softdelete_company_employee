<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div class="form-group">
            <label for="">{{$label}}:</label>
            <input type="{{$type}}" class="form-control" id="name" placeholder="Enter name" name="{{$name}}">
            <!-- @if($errors->has('name')) -->
            <!-- <span style="color:red">{{$errors->first('name')}}</span> -->
            <!-- @endif -->
          </div>
</div>