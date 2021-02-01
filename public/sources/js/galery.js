window.addEventListener("DOMContentLoaded", (e) => {
   let form = document.getElementById('galery-form')
   let galery_img = document.getElementById('galery-imgs')
   let submit = document.getElementById('galery-submit')
   let preview = document.getElementById('galery-preview')

   function showPreviewImg(file) {
      let reader = new FileReader()
      reader.addEventListener('load', function () {
         let imgEl = document.createElement('img')
         imgEl.classList.add("preview-img")
         imgEl.src = this.result
         preview.appendChild(imgEl)
      }, false)
      reader.readAsDataURL(file)
   }
   let allowedTypes = ['png', 'jpg', 'jpeg', 'gif', 'webp']
   galery_img.addEventListener('change', function () {
      let files = this.files, filesLength = files.length, fileType
      for (let i = 0; i < filesLength; i++) {
         fileType = files[i].name.split('.');
         fileType = fileType[fileType.length - 1]
         if (allowedTypes.indexOf(fileType) != -1) {
            showPreviewImg(files[i])
         }
      }
   }, false)

   submit.addEventListener("click", (e) => {
      e.preventDefault()
      console.log(galery_img.files)
      if(galery_img.files){
         form.submit();
      }
   })

})