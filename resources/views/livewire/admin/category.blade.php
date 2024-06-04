<div x-data="{ open: false }">
    @yield('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @include('livewire.admin.modal-form')
                    <h4 class="text-3xl mb-2 font-bold">
                        List Kategori
                    </h4>
                    @if(session('message'))
                    <h2 class="alert alert-success">{{session('message')}}</h2>
                    @endif
                    
                    <button @click="open = true" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        Tambah Kategori
                    </button>
                </div>

                <!-- Ini Bates -->
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-sidebar text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Kategori</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Slug</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            @forelse ($categories as $category)
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">{{ $category->id }}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{ $category->kategori }}</td>
                                <td class="w-1/3 text-left py-3 px-4">{{ $category->slug }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="text-center py-4">Tidak ada Kategori</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('close-modal', event => {
        document.querySelector('#addKategoriModal').open = false;
    });
</script>
@endpush