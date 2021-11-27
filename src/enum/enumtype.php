<?php

enum Status
{
    case Draft;
    case Published;
    case Deleted;
}

print Status::DRAFT->name;