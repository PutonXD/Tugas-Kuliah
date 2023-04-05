class Employee:
    def __init__(self, name, salary, grade, married):
        self.name = name
        self.salary = salary
        self.grade = grade
        self.married = married
        if self.married:
            self.num_children = int(input("Masukkan jumlah anak: "))
        else:
            self.num_children = 0

    def get_salary(self):
        if self.grade == 1:
            allowance_grade = 0.05 * self.salary
        elif self.grade == 2:
            allowance_grade = 0.1 * self.salary
        else:
            allowance_grade = 0.15 * self.salary

        allowance_children = 0.02 * self.salary * self.num_children

        if self.married:
            allowance_spouse = 0.1 * self.salary
        else:
            allowance_spouse = 0

        total_salary = self.salary + allowance_grade + allowance_children + allowance_spouse  

        if total_salary <= 5000000:
            tax = 0.05 * total_salary
        elif total_salary <= 10000000:
            tax = 0.1 * total_salary
        else:
            tax = 0.15 * total_salary

        if self.grade == 3 and self.num_children >= 3:
            bonus = 500000
        elif self.grade == 4 and self.num_children >= 2:
            bonus = 300000
        elif self.grade == 5 and self.num_children >= 1:
            bonus = 200000
        else:
            bonus = 0

        total_salary = total_salary - tax + bonus

        return total_salary

# Contoh penggunaan
nama = input("Masukkan nama: ")
gaji = int(input("Masukkan gaji: "))
golongan = int(input("Masukkan golongan: "))
status = input("Apakah menikah? (y/n): ")
if status.lower() == "y":
    menikah = True
else:
    menikah = False

karyawan = Employee(nama, gaji, golongan, menikah)
print("Gaji total karyawan adalah: ", karyawan.get_salary())
