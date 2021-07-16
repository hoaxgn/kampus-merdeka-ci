<!-- kotak kiri  -->

<section id="isi" class="section section-isi scrollspy">
    <div style="margin-top: 100px; margin-left: 160px; border-radius: 0.5rem;" class="container card">

        <br>
        <label>
            <h5 style="margin-left: 150px;" class="blue-text darken-3">Laporan Tengah</h5>
        </label>
        <br>
        <br>
        <div class="container" style="border-radius: 0.5rem;     padding: 0.5rem 0.75rem 0.1875rem;
            color: var(--primary-text-on-light);
            border: var(--border-on-light);
            border-radius: 0.25rem;">
            <h7 style="margin-left:100px">Berkas Pengajuan:</h7>

            <svg version=" 1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" display="none" aria-hidden="true" width="0" height="0" hidden>
                <defs>
                    <symbol id="sprite-close" viewBox="0 0 24 24">
                        <title>Remove chip</title>
                        <path d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M15.59,7L12,10.59L8.41,7L7,8.41L10.59,12L7,15.59L8.41,17L12,13.41L15.59,17L17,15.59L13.41,12L17,8.41L15.59,7Z" />
                    </symbol>
                </defs>
            </svg>

            <div class="container" js-file-manager>
                <fieldset class="file-input">
                    <legend class="file-input__label">File</legend>
                    <label class="file-input__real" hidden aria-hidden="true">
                        <!--  accept=".json" -->
                        <input type="file" id="applications" multiple js-real-file-input>
                    </label>
                    <div class="file-input__input input input__container">
                        <span class="input__left">
                            <button type="button" class="input__choose" js-fake-file-input>Pilih Berkas</button>
                            <span class="input__no-file" js-no-file>No file chosen</span>
                        </span>
                        <span class="input__files chip__container" js-chip-container></span>
                        <button type="button" class="input__remove" hidden js-remove-files>
                            <svg>
                                <use xlink:href="#sprite-close"></use>
                            </svg>
                        </button>
                    </div>
                </fieldset>
            </div>



            <br>
            <button style="margin-left: 20%" class="btn blue white-text">Kirim</button>

            <button class="btn white black-text">Batal</button>
        </div>
        <br>
        <br>
        <br>
    </div>



    </div>
    </div>
</section>


</body>

</html>
<Script>
    console.clear();

    const fileManager = document.querySelector('[js-file-manager]');

    class FileManager {
        static chipTemplate = (text, id) => {
            return `<span id="${id}" class="chip"><span class="chip__text">${text}</span></span>`;
        }

        static generateId = () => {
            return `chip-${(Math.random() * 0xFFFFFF << 0).toString(16)}`;
        }

        constructor(containerElement) {
            this._containerElement = containerElement;
            this._fakeInput = this._containerElement.querySelector('[js-fake-file-input]');
            this._realInput = this._containerElement.querySelector('[js-real-file-input]');
            this._chipContainer = this._containerElement.querySelector('[js-chip-container]');
            this._noFile = this._containerElement.querySelector('[js-no-file]');
            this._removeFilesButton = this._containerElement.querySelector('[js-remove-files]');

            this._files = [];

            this._addEventListeners();
        }

        _addEventListeners = () => {
            this._fakeInput.addEventListener('click', this._handleFakeInputClick, false);
            this._realInput.addEventListener('change', this._handleRealInputChange, false);
            this._removeFilesButton.addEventListener('click', this._handleRemoveFilesButtonClick, false);
        }

        _handleFakeInputClick = () => {
            if (this._chipContainer.querySelectorAll('.chip').length > 0) {
                this._removeChips();
            }

            this._realInput.click();
        }

        _handleRealInputChange = (e) => {
            if (this._realInput.files.length > 0) {
                this._toggleNoFile();
                [...this._realInput.files].forEach(file => {
                    const name = file.name;
                    const id = FileManager.generateId();
                    const chipTemplate = FileManager.chipTemplate(name, id);

                    this._chipContainer.insertAdjacentHTML('beforeend', chipTemplate);

                    const chip = this._chipContainer.querySelector(`#${id}`);

                    const filesObj = {
                        name,
                        id,
                        chip: chip
                    };

                    this._files.push(filesObj);
                })
            }
        }

        _handleRemoveFilesButtonClick = (e) => {
            if (this._realInput.files.length) {
                this._removeChips();
            }
        }

        _removeChips = () => {
            const chips = [...this._chipContainer.querySelectorAll('.chip')];
            this._toggleNoFile();
            this._files = [];
            this._chipContainer.innerHTML = '';
            this._realInput.value = '';
        }

        _toggleNoFile = () => {
            this._noFile.hidden = !this._noFile.hidden;
            this._removeFilesButton.hidden = !this._removeFilesButton.hidden;
        }
    }

    const fileManagerReference = new FileManager(fileManager);
</Script>