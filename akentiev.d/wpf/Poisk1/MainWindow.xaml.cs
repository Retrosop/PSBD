using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Data;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace Poisk1
{
    public class SearchResult
    {
        public int IdWorks { get; set; }
        public string Typew { get; set; }
        public string Name { get; set; }
        public string IdSpecialty { get; set; }
        public int IdStudent { get; set; }
        public string IdSotrudnik { get; set; }
        public string Ozenka { get; set; }
        public string Datez { get; set; }
    }
    public partial class MainWindow : Window
    {
        private DatabaseHelper dbHelper;
        public ObservableCollection<SearchResult> SearchResults { get; set; }


        public MainWindow()
        {
            InitializeComponent();
            dbHelper = new DatabaseHelper();
            SearchResults = new ObservableCollection<SearchResult>();
            DataContext = this;
            LoadDataFromDatabase();
        }

        private void LoadDataFromDatabase()
        {
            string query = "SELECT * FROM works";
            var dataTable = dbHelper.ExecuteQuery(query);

            if (dataTable != null)
            {
                // Очищаем предыдущие результаты поиска
                SearchResults.Clear();

                // Заполняем ObservableCollection результатами из базы данных
                foreach (DataRow row in dataTable.Rows)
                {
                    SearchResults.Add(new SearchResult
                    {
                        IdWorks = Convert.ToInt32(row["id_works"]),
                        Typew = row["typew"].ToString(),
                        Name = row["name"].ToString(),
                        IdSpecialty = row["id_specialty"].ToString(),
                        IdStudent = Convert.ToInt32(row["id_student"]),
                        IdSotrudnik = row["id_sotrudnik"].ToString(),
                        Ozenka = row["ozenka"].ToString(),
                        Datez = row["datez"].ToString()
                    });
                }
            }
        }
        private void SearchButton_Click(object sender, RoutedEventArgs e)
        {
            string name = nameTextBox.Text;
            string specialty = specialtyTextBox.Text;
            string date = datePicker.Text;

            ExecuteSearch(name, specialty, date);
        }
        private void ExecuteSearch(string name, string specialty, string date)
        {
            string query = "SELECT * FROM works WHERE 1=1";

            if (!string.IsNullOrWhiteSpace(name))
            {
                query += $" AND name LIKE '%{name}%'";
            }

            if (!string.IsNullOrWhiteSpace(specialty))
            {
                query += $" AND id_specialty LIKE '%{specialty}%'";
            }

            if (!string.IsNullOrWhiteSpace(date))
            {
                query += $" AND datez LIKE '%{date}%'";
            }

            var dataTable = dbHelper.ExecuteQuery(query);

            if (dataTable != null)
            {
                // Очищаем предыдущие результаты поиска
                SearchResults.Clear();

                // Заполняем ObservableCollection результатами из базы данных
                foreach (DataRow row in dataTable.Rows)
                {
                    SearchResults.Add(new SearchResult
                    {
                        IdWorks = Convert.ToInt32(row["id_works"]),
                        Typew = row["typew"].ToString(),
                        Name = row["name"].ToString(),
                        IdSpecialty = row["id_specialty"].ToString(),
                        IdStudent = Convert.ToInt32(row["id_student"]),
                        IdSotrudnik = row["id_sotrudnik"].ToString(),
                        Ozenka = row["ozenka"].ToString(),
                        Datez = row["datez"].ToString()
                    });
                }
            }
        }
    }
}
