@props([
    'event',               // Nama event unik untuk memicu modal ini (Wajib diisi)
    'method' => 'delete',  // Nama fungsi PHP di Volt yang akan dieksekusi (Default: delete)
    'title' => 'Hapus Data?', // Judul modal kustom
])

<div
    x-data="{
        open: false,
        loading: false, // 1. State loading lokal khusus modal
        id: null,
        name: '',
        init() {
            window.addEventListener('{{ $event }}', (e) => {
                this.id = e.detail.id;
                this.name = e.detail.name;
                this.loading = false; // Reset loading setiap kali modal dibuka baru
                this.open = true;
            });
        }
    }"
    x-show="open"
    class="fixed inset-0 z-50 overflow-y-auto px-4 flex items-center justify-center"
    style="display: none;"
    {{-- Mencegah tutup via tombol ESC jika sedang proses menghapus --}}
    x-keydown.escape.window="if (!loading) open = false"
>
    {{-- Backdrop dengan efek blur --}}
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 bg-gray-900/50 backdrop-blur-sm"
        {{-- Mencegah tutup klik luar jika sedang proses menghapus --}}
        @click="if (!loading) open = false"
    ></div>

    {{-- Konten Box Dialog --}}
    <div
        x-show="open"
        x-transition.scale.95
        class="bg-white dark:bg-gray-800 rounded-2xl max-w-md w-full p-6 shadow-2xl border border-gray-100 dark:border-gray-700 transform z-10 mx-auto"
    >
        <div class="flex flex-col items-center text-center">
            {{-- Ikon Dinamis: Berubah jadi spinner besar saat menghapus --}}
            <div class="flex h-12 w-12 items-center justify-center rounded-full mb-4"
                 :class="loading ? 'bg-gray-100 dark:bg-gray-700 text-gray-500' : 'bg-red-50 dark:bg-red-950/50 text-red-600 dark:text-red-400'">
                <template x-if="!loading">
                    <i class="ri-error-warning-line text-2xl animate-pulse"></i>
                </template>
                <template x-if="loading">
                    <i class="ri-loader-4-line text-2xl animate-spin"></i>
                </template>
            </div>

            <h3 class="text-lg font-bold text-gray-900 dark:text-white" x-text="loading ? 'Sedang Menghapus...' : '{{ $title }}'"></h3>

            <div class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                <template x-if="!loading">
                    <span>Apakah Anda yakin ingin menghapus <span class="font-bold text-gray-800 dark:text-gray-200" x-text="name"></span>? Tindakan ini tidak dapat dibatalkan.</span>
                </template>
                <template x-if="loading">
                    <span>Mohon tunggu, sistem sedang menghapus data dengan aman dari database...</span>
                </template>
            </div>
        </div>

        {{-- Tombol Pilihan --}}
        <div class="grid grid-cols-2 gap-3 mt-6">
            {{-- Tombol Batal --}}
            <button
                type="button"
                @click="open = false"
                :disabled="loading"
                class="btn bg-light transition-all text-sm font-semibold rounded-xl py-2.5"
                :class="loading ? 'opacity-40 cursor-not-allowed' : 'hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200'"
            >
                Batal
            </button>

            {{-- Tombol Konfirmasi Hapus + Spinner --}}
            <button
                type="button"
                {{-- Alur: Set loading true -> Panggil fungsi backend -> Kelar baru tutup modal -> Jika gagal reset loading --}}
                @click="loading = true; $wire['{{ $method }}'](id).then(() => { open = false; }).catch(() => { loading = false; })"
                :disabled="loading"
                class="btn bg-danger text-white flex items-center justify-center gap-2 transition-all font-bold rounded-xl py-2.5 shadow-lg shadow-red-100 dark:shadow-none"
                :class="loading ? 'opacity-70 cursor-not-allowed' : 'hover:bg-red-700 active:scale-[0.98]'"
            >
                {{-- Muncul saat Normal --}}
                <span x-show="!loading" class="flex items-center gap-2">
                    <i class="ri-delete-bin-7-line"></i> Ya, Hapus
                </span>

                {{-- Muncul saat Loading --}}
                <span x-show="loading" class="flex items-center gap-2" style="display: none;">
                    <i class="ri-loader-4-line animate-spin"></i> Menghapus...
                </span>
            </button>
        </div>
    </div>
</div>
