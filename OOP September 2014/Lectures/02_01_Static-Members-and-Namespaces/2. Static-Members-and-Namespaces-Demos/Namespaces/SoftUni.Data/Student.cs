﻿using System;

namespace SoftUni.Data
{
    public class Student
    {
        public string FirstName { get; set; }
        public string LastName { get; set; }
        public Faculty Faculty { get; set; }
        public Specialty Specialty { get; set; }
        public int FacultyNumber { get; set; }
    }
}
