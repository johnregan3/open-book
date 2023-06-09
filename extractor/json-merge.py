import json
import pandas as pd


def merge_json_files(files):
    content = []
    for file in files:
        with open(file, "r") as f:
            content.append(json.load(f))

    # Merge all the json files into one
    # write to a new json file.
    with open("merged.json", "w") as f:
        json.dump(content, f, indent=4)


if __name__ == "__main__":
    books = {
        "genesis": "Genesis",
        "exodus": "Exodus",
        "leviticus": "Leviticus",
        "numbers": "Numbers",
        "deuteronomy": "Deuteronomy",
        "joshua": "Joshua",
        "judges": "Judges",
        "ruth": "Ruth",
        "1-samuel": "1 Samuel",
        "2-samuel": "2 Samuel",
        "1-kings": "1 Kings",
        "2-kings": "2 Kings",
        "1-chronicles": "1 Chronicles",
        "2-chronicles": "2 Chronicles",
        "ezra": "Ezra",
        "nehemiah": "Nehemiah",
        "esther": "Esther",
        "job": "Job",
        "psalms": "Psalms",
        "proverbs": "Proverbs",
        "ecclesiastes": "Ecclesiastes",
        "song-of-solomon": "Song of Solomon",
        "isaiah": "Isaiah",
        "jeremiah": "Jeremiah",
        "lamentations": "Lamentations",
        "ezekiel": "Ezekiel",
        "daniel": "Daniel",
        "hosea": "Hosea",
        "joel": "Joel",
        "amos": "Amos",
        "obadiah": "Obadiah",
        "jonah": "Jonah",
        "micah": "Micah",
        "nahum": "Nahum",
        "habakkuk": "Habakkuk",
        "zephaniah": "Zephaniah",
        "haggai": "Haggai",
        "zechariah": "Zechariah",
        "malachi": "Malachi",
        "matthew": "Matthew",
        "mark": "Mark",
        "luke": "Luke",
        "john": "John",
        "acts": "Acts",
        "romans": "Romans",
        "1-corinthians": "1 Corinthians",
        "2-corinthians": "2 Corinthians",
        "galatians": "Galatians",
        "ephesians": "Ephesians",
        "philippians": "Philippians",
        "colossians": "Colossians",
        "1-thessalonians": "1 Thessalonians",
        "2-thessalonians": "2 Thessalonians",
        "1-timothy": "1 Timothy",
        "2-timothy": "2 Timothy",
        "titus": "Titus",
        "philemon": "Philemon",
        "hebrews": "Hebrews",
        "james": "James",
        "1-peter": "1 Peter",
        "2-peter": "2 Peter",
        "1-john": "1 John",
        "2-john": "2 John",
        "3-john": "3 John",
        "jude": "Jude",
        "revelation": "Revelation",
    }
    files = []
    for slug, book_name in books.items():
        files.append("./books/%s.json" % slug)

    merge_json_files(files)
