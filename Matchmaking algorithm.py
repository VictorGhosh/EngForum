#Main Algorithm code

class Student():
    """A Student Object containing a list of subjects
    """
    def __init__(self, name: str, subjects = None) -> None:
        self.name = name
        self.score = 0
        if subjects is None:     
            self.subjects = []
        else:
            self.subjects = subjects

    def add_class(self, subject: str) -> None:
        """Appends <subject> to Student's subjects
        
        >>> s1 = Student("Pranav")
        >>> s1.name
        'Pranav'
        >>> s1.subjects
        []
        >>> s1.add_class("Gym")
        >>> s1.subjects
        ['Gym']
        >>> s2 = Student("Ethan", ["Physics"])
        >>> s2.subjects
        ['Physics']
        """
        self.subjects.append(subject)

    def score_update(self, score: int) -> None:
        """Adds <score> to Student's score attribute
        
        >>> s1 = Student("Pranav")
        >>> s1.score
        0
        >>> s1.score_update(3)
        >>> s1.score
        3
        """
        self.score += score

    def candidate(self, subject: str, score: int) -> bool:
        """Returns if a student is eligible to answer a question
        given the <subject> of interest and the <score> threshold

        >>> s1 = Student("Pranav", ["Physics"])
        >>> s1.score_update(3)
        >>> s1.candidate("Physics", 1)
        True
        >>> s1.candidate("Chem", 1)
        False
        >>> s1.candidate("Physics", 5)
        False
        >>> s1.candidate("Chem", 5)
        False
        """
        if subject in self.subjects and self.score >= score:
            return True
        return False


def finder(lst, subject, score):
    students = []
    for student in lst: #O(n)
        if student.candidate(subject, score):
            students.append(student.name)
    return students 

"""MAIN
if __name__ == "__main__":
    import doctest
    doctest.testmod()
    
    s1 = Student("A", ["Physics", "Chem", "Math"])
    s1.score_update(1)
    s2 = Student("B", ["Geo", "Graphics"])
    s2.score_update(7)
    s3 = Student("C", ["Chem", "Graphics"])
    s3.score_update(5)
"""
