<template>
  <div class="container">
    <div :class="['form-group m-1 p-3', (successful ? 'alert-success' : '')]">
      <span v-if="successful" class="label label-success">Published!</span>
    </div>
    <div :class="['form-group m-1 p-3', error ? 'alert-danger' : '']">
      <span v-if="errors.title" class="label label-danger">{{ $errors.title[0] }}</span>
      <span v-if="errors.body" class="label label-danger">{{ $errors.body[0] }}</span>
      <span v-if="errors.image" class="label label-danger">{{ $errors.image[0] }}</span>
    </div>
    <div class="form-group">
      <input
        type="title"
        class="form-control"
        ref="title"
        id="title"
        placeholder="Enter title"
        required
      />
    </div>
    <div class="form-group">
      <textarea
        name="body"
        id="body"
        ref="body"
        rows="8"
        class="form-control"
        placeholder="Enter body"
        required
      ></textarea>
    </div>
    <div class="form-group">
      <input
        type="link"
        class="form-control"
        ref="link"
        id="link"
        placeholder="Enter link"
        required
      />
    </div>
    <div class="custom-file mb-3">
      <input type="file" ref="image" name="image" id="image" class="custom-file-input" required />
      <label class="custom-file-label">Choose File...</label>
    </div>

    <button class="btn btn-primary block" type="submit" @click.prevent="create">Submit</button>
  </div>
</template>
<script>
export default {
  props: {
    userId: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      error: false,
      successful: false,
      errors: []
    };
  },
  methods: {
    create() {
      const formData = new FormData();
      formData.append("title", this.$refs.title.value);
      formData.append("body", this.$refs.body.value);
      formData.append("user_id", this.userId);
      formData.append("image", this.$refs.image.files[0]);
      formData.append("link", this.$refs.link.value);
      axios
        .post("/api/posts", formData)
        .then(response => {
          this.successful = true;
          this.error = false;
          this.errors = [];
        })
        .catch(error => {
          if (!_.isEmpty(error.response)) {
            if ((error.response.status = 422)) {
              this.errors = error.response.data.errors;
              this.successful = false;
              this.error = true;
            }
          }
        });
      this.$refs.title.value = "";
      this.$refs.body.value = "";
      this.$refs.link.value = "";
    }
  }
};
</script>
