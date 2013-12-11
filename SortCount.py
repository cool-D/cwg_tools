#!/usr/bin/env python
import sys

if __name__ == "__main__":
    dictionary = {}
    for item in sys.stdin.readlines():
        # Each line will have a newline on the end
        # that should be removed.
        item = item.strip()
        if item in dictionary:
            dictionary[item] += 1
        else:
            dictionary[item] = 1

    for name, count in dictionary.iteritems():
        sys.stdout.write("%d\t%s\n" % (count, name))