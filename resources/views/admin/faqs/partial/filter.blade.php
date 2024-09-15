
<div class="card">
    <div class="bg-dark card-header header-elements-inline border-bottom-0">
        <h5 class="card-title text-uppercase font-weight-semibold">Filter</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label class="d-block font-weight-semibold">Search Keyword:</label>
                    <div class="input-group">
                        <input placeholder="Search Keyword" name="search_value" value="{{ request('search_value') }}" class="form-control" />
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="d-block font-weight-semibold">Select Category:</label>
                    <div class="input-group">
                        <select name="category_id" class="form-control">
                            <option value="" {{ !request('category_id') ? 'selected' : '' }}>Choose category</option>
                            @foreach($faq_categories as $category)
                                <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-2">
                    <label class="d-block font-weight-semibold">Status:</label>
                    <div class="input-group">
                        <select name="status" class="form-control">
                            <option {{ request('status') === null ? 'selected' : '' }} value="">Choose option</option>
                            <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Enabled</option>
                            <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Disabled</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-end mt-2">
                <button class="btn bg-primary" type="submit">
                    Search Now
                </button>
                <a href="{{ route('admin.faqs.index') }}" data-popup="tooltip" data-placement="top"
                    data-original-title="Refresh Search" class="btn bg-danger ml-2">
                    <i class="icon-spinner9"></i>
                </a>
            </div>
        </form>
    </div>
</div>
