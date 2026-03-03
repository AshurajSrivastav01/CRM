@extends('backend.layout.main')
@section('main-container')
    <!-- Dashboard Content -->
    <div class="container-fluid p-4">
        <!-- Page Title -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Add New Post</h4>
                    <div>
                        <a href="#" class="btn btn-outline-secondary me-2">
                            <i class="bi bi-arrow-left me-1"></i> Back to Previous Page
                        </a>
                    </div>
                </div>
                <nav aria-label="breadcrumb" class="mt-2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add New</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <div class="content-card">
                    <div class="card-body">
                        <div class="mb-4">
                            <label for="postTitle" class="form-label">Post Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="postTitle" placeholder="Add title" required>
                        </div>

                        <div class="mb-4">
                            {{-- Rich Text Editor  --}}
                            <textarea id="textarea" placeholder="write your content here..."></textarea>

                            <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
                            <script>
                                tinymce.init({
                                    selector: '#textarea',
                                    plugins: [
                                    // Core editing features
                                    'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
                                    // Your account includes a free trial of TinyMCE premium features
                                    // Try the most popular premium features until Sep 24, 2025:
                                    'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'advtemplate', 'ai', 'uploadcare', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                                    ],
                                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography uploadcare | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                    tinycomments_mode: 'embedded',
                                    tinycomments_author: 'Author name',
                                    mergetags_list: [
                                    { value: 'First.Name', title: 'First Name' },
                                    { value: 'Email', title: 'Email' },
                                    ],
                                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
                                    uploadcare_public_key: '57448d1ae1556538538d',
                                });
                                </script>
                        </div>

                        <div class="mb-4">
                            <label for="postTitle" class="form-label">Meta Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg" id="metaTitle" placeholder="Add meta title" required>
                        </div>

                        <div class="mb-4">
                            <label for="postTitle" class="form-label">Meta Description <span class="text-danger">*</span></label>
                            <textarea class="form-control form-control-lg" id="metaDescription" placeholder="Add meta description" required></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Options Column -->
            <div class="col-lg-4">
                <!-- Publish Box -->
                <div class="content-card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Publish</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" id="sidebarPublishBtn">
                                <i class="bi bi-check-circle me-1"></i> Publish
                            </button>
                            <button class="btn btn-outline-secondary" id="sidebarSaveDraftBtn">
                                <i class="bi bi-file-earmark me-1"></i> Save Draft
                            </button>
                        </div>
                    </div>
                    <div class="card-footer bg-white">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="stickPost">
                            <label class="form-check-label" for="stickPost">
                                Stick this post to the top of the blog
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Categories Box -->
                <div class="content-card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <select class="form-select" id="postCategory">
                                <option value="">Uncategorized</option>
                                <option value="technology">Technology</option>
                                <option value="design">Design</option>
                                <option value="business">Business</option>
                                <option value="lifestyle">Lifestyle</option>
                            </select>
                        </div>
                        <div class="form-text">Select a category for your post</div>
                    </div>
                </div>

                <!-- Tags Box -->
                <div class="content-card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="tag-input-container">
                            <div class="tags-container"></div>
                            <input type="text" class="tag-input" placeholder="Add tags" id="tagInput">
                        </div>
                        <div class="form-text">Type and press Enter to add tags</div>
                    </div>
                </div>

                <!-- Featured Image Box -->
                <div class="content-card mb-4">
                    <div class="card-header bg-white">
                        <h5 class="card-title mb-0">Featured Image</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="featuredImage" accept="image/*">
                        </div>
                        <img id="featuredImagePreview" class="featured-image-preview" alt="Featured image preview">
                        <div class="form-text">Upload or select a featured image for your post</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .content-card {
        padding: 20px;
    }
</style>
<script>
    // Featured image preview
    document.getElementById('featuredImage').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const preview = document.getElementById('featuredImagePreview');
                preview.src = event.target.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    // Tag input functionality
    const tagInput = document.getElementById('tagInput');
    const tagsContainer = document.querySelector('.tags-container');
    const tags = [];

    tagInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' && this.value.trim() !== '') {
            e.preventDefault();
            addTag(this.value.trim());
            this.value = '';
        }
    });

    function addTag(text) {
        if (tags.includes(text)) return;

        tags.push(text);

        const tagElement = document.createElement('div');
        tagElement.className = 'tag';
        tagElement.innerHTML = `
            ${text}
            <span class="tag-remove" data-tag="${text}">
                <i class="bi bi-x"></i>
            </span>
        `;

        tagsContainer.appendChild(tagElement);

        // Add remove functionality
        tagElement.querySelector('.tag-remove').addEventListener('click', function() {
            const tagToRemove = this.getAttribute('data-tag');
            const index = tags.indexOf(tagToRemove);
            if (index !== -1) {
                tags.splice(index, 1);
            }
            tagsContainer.removeChild(tagElement);
        });
    }

    // Save draft functionality
    document.getElementById('saveDraftBtn').addEventListener('click', saveDraft);
    document.getElementById('sidebarSaveDraftBtn').addEventListener('click', saveDraft);

    function saveDraft() {
        // Validate form
        const title = document.getElementById('postTitle').value;
        const content = document.getElementById('postContent').value;

        if (!title || !content) {
            alert('Please fill in all required fields');
            return;
        }

        // In a real application, this would send data to the server
        alert('Draft saved successfully!');
    }

    // Publish functionality
    document.getElementById('publishBtn').addEventListener('click', publishPost);
    document.getElementById('sidebarPublishBtn').addEventListener('click', publishPost);

    function publishPost() {
        // Validate form
        const title = document.getElementById('postTitle').value;
        const content = document.getElementById('postContent').value;

        if (!title || !content) {
            alert('Please fill in all required fields');
            return;
        }

        // In a real application, this would send data to the server
        alert('Post published successfully!');
    }
</script>
@endsection
