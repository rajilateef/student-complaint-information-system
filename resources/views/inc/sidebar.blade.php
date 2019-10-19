<div class="col-lg-2 sidebar-bg text-center">
    @if(Auth::guard('admin')->check())
    <div class="mt-5 border-top">
        <a href="#" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Students
            </div>
        </a>
        <a href="#" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Students complaints
            </div>
        </a>
        <a href="#" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Reviewed complaints
            </div>
        </a>
    </div>
    @else
    {{-- @if(Auth::guard('web')->check()) --}}
    <div class="mt-5 border-top">
        <a href="#" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Create complaint
            </div>
        </a>
        <a href="#" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                View complaints
            </div>
        </a>
        <a href="#" class="text-white text-decoration-none">
            <div class="py-2 border-bottom">
                Reviewed complaints
            </div>
        </a>
    </div>
    @endif
</div>