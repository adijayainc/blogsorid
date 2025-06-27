import re

def replace_text_with_regex(file_path, pattern, replacement):
    try:
        with open(file_path, 'r', encoding='utf-8') as file:
            file_data = file.read()

        # Ganti semua yang cocok dengan pattern regex
        file_data_new = re.sub(pattern, replacement, file_data)

        with open(file_path, 'w', encoding='utf-8') as file:
            file.write(file_data_new)

        print("Teks berhasil diganti dengan regex.")
    except Exception as e:
        print(f"Terjadi kesalahan: {e}")

if __name__ == "__main__":
    file_path = 'system.yaml'
    pattern = r'/blog/[^ \n]+'  # Contoh: ganti semua path yang dimulai dengan /blog/ sampai spasi atau newline
    replacement = '/blog/{tema} '

    replace_text_with_regex(file_path, pattern, replacement)

