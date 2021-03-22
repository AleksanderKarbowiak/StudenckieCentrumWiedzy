﻿using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace SCW.Entities
{
    public class Subject
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }

        public int FieldOfStudyId { get; set; }

       public virtual FieldOfStudy FieldOfStudy { get; set; }

        public virtual List<Lectuer> Lectuers { get; set; } 

       
        public virtual List<Material> Materials { get; set; }


        public virtual List<Tutor> Turors { get; set; }
    }
}
