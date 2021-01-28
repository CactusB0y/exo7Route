<h1>c'est le beau site</h1>
<form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Example select</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Example multiple select</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Example textarea</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form>
  <div class="row">
      <div class="col-2">
        <ul>
            @foreach ($fronts as $front)
                @if ($i < 3)
                    <li>{{$front -> nom}}</li>
                    <p class="d-none">{{$i++}} </p>
                @endif
            @endforeach
        </ul>
      </div>
      <div class="col-2">
        <ul>
            @foreach ($backs as $back)
                @if ($o < 3)
                    <li>{{$back -> nom}}</li>
                    <p class="d-none">{{$o++}}</p>
                @endif
            @endforeach
        </ul>
      </div>
  </div>