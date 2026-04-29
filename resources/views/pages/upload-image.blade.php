@extends('layouts.app')

@section('title', 'Upload Foto Kamar - Amanuba Hotel & Resort')

@section('content')
<!-- Hero Section -->
<section class="relative h-64 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80');">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
        <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 font-['Playfair_Display']">Upload Foto Kamar</h1>
            <p class="text-xl">Unggah foto kamar untuk Hotel Amanuba</p>
        </div>
    </div>
</section>

<!-- Upload Form Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Upload Form -->
            <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold mb-6 font-['Playfair_Display']">Upload Foto Kamar Deluxe</h2>
                
                <form id="uploadForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="room_type" value="deluxe">
                    
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-2">Pilih Foto Kamar *</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-amber-500 transition-colors duration-200">
                            <input type="file" id="imageInput" name="image" accept="image/*" class="hidden" required>
                            <div id="uploadArea" class="cursor-pointer">
                                <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                </svg>
                                <p class="text-gray-600 mb-2">Klik untuk memilih foto atau drag & drop</p>
                                <p class="text-sm text-gray-500">Format: JPG, PNG, GIF (Maks: 5MB)</p>
                            </div>
                            <div id="previewArea" class="hidden">
                                <img id="imagePreview" class="mx-auto max-h-64 rounded-lg shadow-lg mb-4" alt="Preview">
                                <p class="text-sm text-gray-600" id="fileName"></p>
                                <button type="button" id="removeImage" class="mt-2 text-red-600 hover:text-red-800 text-sm">
                                    Hapus Foto
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-4">Optimasi Foto Hotel Amanuba</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div class="bg-amber-50 p-4 rounded-lg">
                                <h4 class="font-semibold mb-2">✨ Auto-Enhancement</h4>
                                <p class="text-sm text-gray-600">Brightness, contrast, dan sharpening otomatis</p>
                            </div>
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold mb-2">📐 Ukuran Optimal</h4>
                                <p class="text-sm text-gray-600">Resize otomatis ke 1740x800px</p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <h4 class="font-semibold mb-2">🎨 Warm Tone</h4>
                                <p class="text-sm text-gray-600">Filter warm tone untuk tema hotel</p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg">
                                <h4 class="font-semibold mb-2">🖼️ Thumbnail</h4>
                                <p class="text-sm text-gray-600">Generate thumbnail otomatis</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" id="uploadBtn" class="bg-amber-600 text-white hover:bg-amber-700 px-8 py-3 rounded-lg font-semibold transition-colors duration-200 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                            <span id="uploadText">Upload Foto</span>
                            <span id="uploadSpinner" class="hidden">
                                <svg class="animate-spin h-5 w-5 mr-2 inline" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Processing...
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Current Image Display -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-xl font-bold mb-4 font-['Playfair_Display']">Foto Saat Ini</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold mb-2">Home Page</h4>
                        <img src="{{ asset('images/rooms/deluxe-room.jpg') }}" 
                             alt="Deluxe Room - Home" 
                             class="w-full rounded-lg shadow-md"
                             onerror="this.src='https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'">
                    </div>
                    <div>
                        <h4 class="font-semibold mb-2">Rooms Page</h4>
                        <img src="{{ asset('images/rooms/deluxe-room.jpg') }}" 
                             alt="Deluxe Room - Rooms" 
                             class="w-full rounded-lg shadow-md"
                             onerror="this.src='https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadForm = document.getElementById('uploadForm');
    const imageInput = document.getElementById('imageInput');
    const uploadArea = document.getElementById('uploadArea');
    const previewArea = document.getElementById('previewArea');
    const imagePreview = document.getElementById('imagePreview');
    const fileName = document.getElementById('fileName');
    const removeImage = document.getElementById('removeImage');
    const uploadBtn = document.getElementById('uploadBtn');
    const uploadText = document.getElementById('uploadText');
    const uploadSpinner = document.getElementById('uploadSpinner');

    // Click to upload
    uploadArea.addEventListener('click', () => imageInput.click());

    // File selection
    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            if (file.size > 5 * 1024 * 1024) {
                alert('File terlalu besar. Maksimal 5MB.');
                return;
            }
            
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                fileName.textContent = file.name;
                uploadArea.classList.add('hidden');
                previewArea.classList.remove('hidden');
                uploadBtn.disabled = false;
            };
            reader.readAsDataURL(file);
        }
    });

    // Remove image
    removeImage.addEventListener('click', function() {
        imageInput.value = '';
        uploadArea.classList.remove('hidden');
        previewArea.classList.add('hidden');
        uploadBtn.disabled = true;
    });

    // Drag and drop
    uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.classList.add('border-amber-500', 'bg-amber-50');
    });

    uploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        this.classList.remove('border-amber-500', 'bg-amber-50');
    });

    uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.classList.remove('border-amber-500', 'bg-amber-50');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            imageInput.files = files;
            const event = new Event('change', { bubbles: true });
            imageInput.dispatchEvent(event);
        }
    });

    // Form submission
    uploadForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        uploadBtn.disabled = true;
        uploadText.classList.add('hidden');
        uploadSpinner.classList.remove('hidden');
        
        fetch('/upload-room-image', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Refresh the current images
                const currentImages = document.querySelectorAll('img[alt*="Deluxe Room"]');
                currentImages.forEach(img => {
                    img.src = data.url + '?t=' + Date.now();
                });
                
                // Reset form
                imageInput.value = '';
                uploadArea.classList.remove('hidden');
                previewArea.classList.add('hidden');
                uploadBtn.disabled = true;
                uploadText.classList.remove('hidden');
                uploadSpinner.classList.add('hidden');
                
                // Show success message
                const successDiv = document.createElement('div');
                successDiv.className = 'mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg';
                successDiv.textContent = data.message;
                uploadForm.parentElement.insertBefore(successDiv, uploadForm);
                
                setTimeout(() => successDiv.remove(), 5000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan saat upload foto.');
        })
        .finally(() => {
            uploadBtn.disabled = false;
            uploadText.classList.remove('hidden');
            uploadSpinner.classList.add('hidden');
        });
    });
});
</script>
@endpush
