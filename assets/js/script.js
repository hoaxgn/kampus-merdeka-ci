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

        const filesObj = { name, id, chip: chip };

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