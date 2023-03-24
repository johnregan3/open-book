import os
import multiprocessing
import datetime
from downloader import Downloader
from meaningless.utilities import json_file_interface

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
    for slug, book_name in books.items():
        downloader = Downloader(
            file_writing_function=json_file_interface.write,
            use_ascii_punctuation=True,
            show_passage_numbers=False,
            file_extension=".json",
        )
        downloader.translation = "NRSV"

        print("%s Downloading..." % book_name)
        downloader.download_passage_range(book_name, 1, 1, 151, 2600)
        bible = json_file_interface.read("./%s.json" % book_name)
        bible["Info"]["Customised?"] = True
        json_file_interface.write("./%s.json" % book_name, bible)
