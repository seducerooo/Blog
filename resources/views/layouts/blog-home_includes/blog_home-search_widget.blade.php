<div class="card my-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
        <div class="input-group">
            <form class="input-group" type="get" action="{{ route('search') }}">
            <input type="text" name="query" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
            </form>
        </div>
    </div>
</div>
