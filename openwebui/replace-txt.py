def replace_text_in_file(file_path, old_text, new_text):
    # Baca isi file
    with open(file_path, 'r', encoding='utf-8') as file:
        file_data = file.read()

    # Ganti teks lama dengan yang baru
    file_data = file_data.replace(old_text, new_text)

    # Tulis ulang isi file dengan teks yang sudah diganti
    with open(file_path, 'w', encoding='utf-8') as file:
        file.write(file_data)

if __name__ == "__main__":
    file_path = 'system.yaml'       # Ganti dengan path file Anda
    old_text = '/blog/'          # Teks yang ingin diganti
    new_text = '/blog/new-year-1447H'          # Teks pengganti

    replace_text_in_file(file_path, old_text, new_text)
    print("Teks berhasil diganti.")

